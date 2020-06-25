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
            ]
        ];
    }



    public function allRecipes() {
        $category = $this->property('category');
        debug($category);
        $recipes = Recipe::with('categories');
        if ($category) {
            $recipes = $recipes->whereHas('categories', function($query) use ($category) {
                $query->where('category_title', $category);
            });
        }
        if ($this->property('limit')) {
            $recipes = $recipes->limit($this->property('limit'));
        }
        return $recipes->get();
    }

    public function getAllCategories() {
        return Category::get();
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
}
