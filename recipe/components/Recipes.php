<?php namespace Recipe\Recipe\Components;

use Cms\Classes\ComponentBase;
use recipe\Recipe\Models\Recipe;
use recipe\Recipe\Models\Category;

class Recipes extends ComponentBase
{
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
                'default'           => 'My title',
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
            'ads_id' => [
                'title' => 'Ad ID',
                'description' => 'Proivde the AD ID to show in last column',
                'default' => 1,
                'type' => 'string'
            ]
        ];
    }



    public function allRecipes() {
        $category_slug = $this->property('category');
        debug($category_slug);
        $recipes = Recipe::with('categories');
        if ($category_slug) {
            $recipes = $recipes->whereHas('categories', function($query) use ($category_slug) {
                $query->where('category_title', $category_slug);
            });
        }
        if ($this->property('limit')) {
            $recipes = $recipes->limit($this->property('limit'));
        }
        return $recipes->get();
    }

    // public function categoriesWithRecipes($recipes_limit = 10) {
    //     $recipes_limit = $this->property('recipes_limit', $recipes_limit);

    //     $categories = Category::with(['recipes' => function($query) use ($recipes_limit) {
    //         if ($recipes_limit) {
    //             $query->limit($recipes_limit);
    //         }
    //     }]);
    //     $categories = $categories->get();
        
    //     debug($categories->toArray());
    // }
}
