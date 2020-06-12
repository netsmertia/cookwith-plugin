<?php namespace recipe\Recipe;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Recipe Settings',
                'description' => 'Manage user based settings.',
                'category'    => 'CWS Recipe',
                'icon'        => 'icon-cog',
                'class'       => 'Recipe\Recipe\Models\Settings',
                'order'       => 500,
                'keywords'    => 'Recipe Settings',
                'permissions' => ['recipe.recipe.access_settings']
            ],

            'Other' => [
                'label'       => 'Other ',
                'description' => 'Manage user based settings.',
                'category'    => 'CWS Recipe',
                'icon'        => 'icon-cog',
                'class'       => 'Recipe\Recipe\Models\Settings',
                'order'       => 500,
                'keywords'    => 'Recipe Settings',
                'permissions' => ['recipe.recipe.access_settings']
            ],
        ];

    }
}
