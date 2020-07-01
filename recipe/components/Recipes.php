<?php namespace Recipe\Recipe\Components;

use Cms\Classes\ComponentBase;
use recipe\Recipe\Models\Recipe;
use recipe\Recipe\Models\Category;
use recipe\Recipe\Models\Advertisement;
use recipe\Recipe\Models\AdSpace;

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
        ];
    }


    public function test() {
        $recipe = Recipe::with(['related' => function($q) {
            $q->with('img')->select(['id', 'title', 'rating','slug']);
        }])->find(1);
    }

    public function allRecipes() {
        $category = $this->property('category');
        $recipes = Recipe::with(['categories', 'img']);
        if ($category) {
            $recipes = $recipes->whereHas('categories', function($query) use ($category) {
                $query->where('category_title', $category);
            });
        }
        if ($this->property('limit')) {
            $recipes = $recipes->limit($this->property('limit'));
        }

        if ($this->property('recipe_type')) {
            $recipes = $recipes->where('recipe_type', '=', $this->property('recipe_type'));
        }

        return $recipes->get();
    }

    public function getAllCategories() {
        return Category::get();
    }
    public function getAllCategoriesForSlider() {
        return Category::with('image')->whereHas('image')->get();
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
            $adSapce = AdSpace::with(['ads', 'ads.image'])->where('space_code', $spaceCode)->first();
            return $adSapce;
        }
    }

    public function getRecipeOfTheDay() {
        $recipe = Recipe::with('categories')
            ->where('video', '!=', '')
            ->where('recipe_of_the_day', 1)
            ->first();
        return $recipe;
    }

    public function getRecipe($recipe_slug = null) {
        $recipe = Recipe::with(['img', 'related' => function ($q) {
            $q->with('img')->select('id', 'title', 'slug', 'rating', 'video', 'recipe_type');
        }])
            ->where('slug', $recipe_slug)->first();
        return $recipe;
    }

    public function getVideo($slug = null) {
        $video = Recipe::with(['related' => function ($q) {
            $q->with('img')->select('id', 'title', 'slug', 'rating', 'video', 'recipe_type');
        }, 'img'])->where([
            ['video', '!=', null],
            ['recipe_type', 'VIDEO']
        ]);

        if ($slug) {
            $video = $video->where('slug', $slug);
        }

        $video = $video->first();
        return $video;
    }



    public function getAllVideos($paginate = true, $limit = null) {
        $videos = Recipe::where([
            ['video', '!=', null],
            ['recipe_type', 'VIDEO']
        ])->with('img');

        $category = input('cats');
        if (!empty($category)) {
            $videos = $videos->whereHas('categories' , function ($q) use ($category) {
                $q->whereIn('id', $category);
            });
        }

        $term = input('term');
        if ($term) {
            $videos = $videos->where('title', 'like', "%$term%");
        }

        if ($limit) {
            $videos = $videos->limit($limit);
        }



        if ($paginate) {
            $videos = $videos->paginate(10);
        } else {
            return $videos->get();
        }

        return $videos;
    }
}

