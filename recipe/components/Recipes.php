<?php namespace Recipe\Recipe\Components;

use Cms\Classes\ComponentBase;
use Recipe\Recipe\Classes\AdsHelper;
use recipe\Recipe\Models\Recipe;
use recipe\Recipe\Models\Category;
use recipe\Recipe\Models\Advertisement;
use recipe\Recipe\Models\AdSpace;
use recipe\Recipe\Models\Rating;

class Recipes extends ComponentBase
{
    public function onInit()
    {
        // $this->controller->addComponent('\Recipe\Recipe\Components\Ads', 'ads', []);
    }

    public function componentDetails()
    {
        return [
            'name'        => 'All Recipes',
            'description' => 'Get the list of all recipes'
        ];
    }

    public function defineProperties()
    {
        return [
            'section_title' => [
                'title'             => 'Title',
                'description'       => 'Category section title',
                'default'           =>  null,
                'type'              => 'string',
            ],
            'section_view_more_url' => [
                'title'             => 'View More Url',
                'description'       => 'View more url for categories',
                'default'           => null,
                'type'              => 'string',
            ],
            'category' => [
                'title'             => 'Category slug',
                'description'       => 'Filter catetories by category slug',
                'default'           => null,
                'type'              => 'string',
            ],
            'limit' => [
                'title'             => 'Recipes Limit',
                'description'       => 'Total no of recipes to get',
                'default'           => 4,
                'type'              => 'string',
            ],
            'space_code' => [
                'title' => 'Space Code',
                'description' => 'Space Code',
                'default' => null,
                'type' => 'string'
            ],
            'recipe_type' => [
                'title' => 'Recipe Type',
                'default' => 'TEXT',
                'type' => 'dropdown',
                'options' => [
                    'TEXT' => 'Recipe Post',
                    'VIDEO' => 'Recipe Video',
                    'BOTH' => 'Recipe Post with Video'
                ]
            ],
            'recipe_url' => [
                'title' => 'Recipe URL',
                'description' => 'Recipe view page url',
                'default' => 'recipe',
                'type' => 'string'
            ],

            'per_page' => [
                'title'             => 'Per Page',
                'description'       => 'Per page recipes if required paginated',
                'default'           => null,
                'type'              => 'string',
            ],
        ];
    }


    public function test() {
        $recipe = Recipe::with(['related' => function($q) {
            $q->with('img')->select(['id', 'title', 'rating','slug']);
        }])->find(1);
    }

    public function allRecipes() {
        $category = $this->property('category');
        $recipes = Recipe::with(['categories', 'img', 'translations'])->published();
        if ($category) {
            $recipes = $recipes->whereHas('categories', function($query) use ($category) {
                $query->where('category_title', $category)
                    ->orWhere('category_slug', $category)
                    ->withTrans();
                    // ->select('id', 'category_title', 'category_slug');
            });
        }
        if ($this->property('limit')) {
            $recipes = $recipes->limit($this->property('limit'));
        }

        if ($this->property('recipe_type')) {
            $recipes = $recipes->where('recipe_type', '=', $this->property('recipe_type'));
        }
        // $recipes = $recipes->select('id', 'title', 'slug', 'rating', 'created_at', 'serve', 'time', 'content');

        if ($this->property('per_page')) {
            return $recipes->paginate($this->property('per_page'));
        }
        return $recipes->get();
    }

    public function getAllCategories() {
        return Category::withTrans()->orderBy('category_title')->get();
    }
    public function getAllCategoriesWithVideo() {
        return Category::whereHas('recipes', function($q) {
            $q->where('recipe_type', '!=', 'TEXT');
        })->get();
    }
    public function getAllCategoriesForSlider() {
        return Category::withTrans()
            ->with('image')->whereHas('image')->get();
    }

    public function getCategory($category) {
        $cat = Category::where('category_slug', $category)->first();
        return $cat;
    }

    public function getAd($spaceCode = null) {
        $spaceCode = $spaceCode == null ? $this->property('space_code'): $spaceCode;
        if ($spaceCode == null) {
            return;
        } else {
            $adSpace = AdSpace::with(['ads' => function ($q) {
                $q->active();
            }, 'ads.image'])->where('space_code', $spaceCode)->active()->first();
            return $adSpace;
        }
    }

    public function getRecipeOfTheDay() {
        $recipe = Recipe::with('categories')
            ->where('video', '!=', '')
            ->where('recipe_of_the_day', 1)
            ->published()
            ->first();
        return $recipe;
    }

    public function getRecipe($recipe_slug = null) {
        $recipe = Recipe::with(['img', 'related' => function ($q) {
            $q->with('img')->select('id', 'title', 'slug', 'rating', 'video', 'recipe_type', 'total_rating', 'total_votes');
        }])
        ->withTrans()
        ->transWhere('slug', $recipe_slug, 'ar')
        ->published()
        ->first();
        return $recipe;
    }

    public function getVideo($slug = null) {
        $video = Recipe::with(['related' => function ($q) {
            $q->with('img')->select('id', 'title', 'slug', 'rating', 'video', 'recipe_type', 'created_at');
        }, 'img'])->where([
            ['video', '!=', null],
            ['recipe_type', '!=', 'TEXT']
        ])->withTrans()
        ->published();
        if ($slug) {
            $video = $video->transWhere('slug', $slug, 'ar');
        }

        $video = $video->first();
        return $video;
    }



    public function getAllVideos($paginate = true, $limit = 10) {
        // $videos = Recipe::where([
        //     ['video', '!=', null],
        //     ['recipe_type','!=', 'TEXT']
        // ])->with('img')->withTrans()->published();


        // $term = input('term');
        // if ($term) {
        //     $videos = $videos->transWhere('title', "%$term%", 'ar', 'like');
        // }

        // if ($limit) {
        //     $videos = $videos->limit($limit);
        // }

        // if ($paginate) {
        //     $videos = $videos->paginate(12);
        // } else {
        //     return $videos->get();
        // }

        // return $videos;

        // first get all the recipes id mathing search term
        $term = input('term');
        $x = collect();
        if (\App::getLocale() == 'ar' && $term) {
            $x = \Db::table('rainlab_translate_indexes')->where(
                [
                    ['locale', '=', 'ar'],
                    ['model_type', '=', 'recipe\recipe\models\recipe'],
                    ['item', '=', 'title'],
                    ['value', 'like', "%$term%"]
                ]
            )->pluck('model_id');
        }    
        
        $recipes = Recipe::with(['img'])
            ->whereIn('recipe_type', ['BOTH','VIDEO'])
            ->where(function($q) use ($x, $term){

                if ($term) {
                    $q->whereIn('id', $x);
                    $q->orWhere('title', 'like', "%$term%");
                }
            })
            ->withTrans()
            ->published()
            ->select('recipe_recipe_recipe.id', 'title', 'created_at', 'content', 'slug', 'total_votes', 'total_rating');
        $category = input('cats');
        if (!empty($category)) {
            $recipes = $recipes->whereHas('categories' , function ($q) use ($category) {
                $q->whereIn('id', $category);
            });
        }

        if ($paginate) {
            $recipes = $recipes->paginate(6);
        } else {
            if ($limit) {
                $recipes = $recipes->limit($limit);
            }
            $recipes = $recipes->get();
        }
        return $recipes;
    }

    public function getRecipesForMenu($category_slug = null) {
        if ($category_slug) {
            $recipes = Recipe::whereHas('categories', function($q) use ($category_slug) {
                $q->where('category_slug', $category_slug);
            })->where('recipe_type', 'TEXT')
            ->withTrans()
            ->limit(7)->orderBy('created_at')->published()->get();
            return $recipes;
        }
    }
    //get All the recipes with or without search term
    // search will be performed in arabic along with english if locale is 'ar'
    // search will be performed in english only if locale is 'en'
    // pagination will be done depending on $paginate varialable passed
    // recipes will be selected with $type_in ie. [TEXT, VIDEO, BOTH]
    public function getAllRecipes($term = '', $type_in = ["TEXT"], $paginate = true, $limit = null) {

        // first get all the recipes id mathing search term
        $term = input('term', $term);
        $x = collect();
        if (\App::getLocale() == 'ar' && $term) {
            $x = \Db::table('rainlab_translate_indexes')->where(
                [
                    ['locale', '=', 'ar'],
                    ['model_type', '=', 'recipe\recipe\models\recipe'],
                    ['item', '=', 'title'],
                    ['value', 'like', "%$term%"]
                ]
            )->pluck('model_id');
        }    
        
        $recipes = Recipe::with(['img'])
            ->whereIn('recipe_type', $type_in)
            ->where(function($q) use ($x, $term){
                $q->whereIn('id', $x);

                if ($term) {
                    $q->orWhere('title', 'like', "%$term%");
                }
            })
            ->withTrans()
            ->published()
            ->distinct()
            ->select('recipe_recipe_recipe.id', 'title', 'created_at', 'content', 'slug');

        if ($paginate) {
            $recipes = $recipes->paginate(12);
        } else {
            if ($limit) {
                $recipes = $recipes->limit($limit);
            }
            $recipes = $recipes->get();
        }
        return $recipes;
    }


    public function onOverlaySearch() {
        $term = input('overlay_search_term');
        $result = self::getAllRecipes($term, ['TEXT', 'BOTH'], true);
        $this->page['overlaySearchResult'] = $result;
    }

    public function onVote() {

        $value = input('value');
        $postId = input('postid');
        $rating = new Rating();
        $rating->ip = \Request::ip();
        $rating->recipe_id = $postId;
        $rating->rating = $value;
        $rating->save();
        if ($postId && $value) {
            Recipe::where('id', $postId)->update([
                'total_votes' => \DB::raw('total_votes+1'),
                'total_rating' => \DB::raw("total_rating + $value")
            ]);
        }
    }

    public function onSaveAdsStats() {
        $data = input('data');
        if (is_array($data)) {
            foreach($data as $d) {
                AdsHelper::logAd($d['space_id'], $d['ad_id'], $d['action'], \Request::ip());
            }
        }
    }

    public function redirect() {
        return "hello";
    }
}

