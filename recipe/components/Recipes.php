<?php namespace Recipe\Recipe\Components;

use Cms\Classes\ComponentBase;
use recipe\Recipe\Models\Recipe;

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
        return [];
    }

    public function allRecipes() {
        return Recipe::get();
    }
}
