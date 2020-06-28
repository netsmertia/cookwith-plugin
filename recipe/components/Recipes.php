<?php namespace Recipe\Recipe\Components;

use Cms\Classes\ComponentBase;
use recipe\Recipe\Models\Recipe;
use recipe\Recipe\Models\Category;
use recipe\Recipe\Models\Advertisement;

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
            'ad_id' => [
                'title' => 'Ad ID',
                'description' => 'Proivde the AD ID to show in last column',
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

    public function getAd() {
        $adId = $this->property('ad_id');
        debug($adId);
        if ($adId == null) {
            return;
        } else {
            $ad = Advertisement::with('image')->where('ad_id', $adId)->first();
            debug($ad);
            return ($ad);
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

}

