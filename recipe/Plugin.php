<?php namespace recipe\Recipe;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public $require = [
        'Flynsarmy.Menu',
        'RainLab.Blog',
        'RainLab.Translate',
        'PolloZen.NextPrevPost',
        'VojtaSvoboda.TwigExtensions',
        'Bedard.Debugbar',
        'JanVince.SmallContactForm',
        'Excodus.TranslateExtended',
        'JorgeAndrade.Subscribe',
    ];
    
    public function registercomponents()
    {
        return [
           'Recipe\Recipe\Components\Recipes' => 'recipes',
           'Recipe\Recipe\Components\Ads' => 'ads'
        ];
    }
    public function registerPageSnippets()
    {
        return [
           'Recipe\Recipe\Components\Recipes' => 'recipes',
           'Recipe\Recipe\Components\Ads' => 'ads'
        ];
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

            'website_config' => [
                'label'       => 'Website Configure',
                'description' => 'Configure settings related to website',
                'category'    => 'CWS Recipe',
                'icon'        => 'icon-cog',
                'class'       => 'Recipe\Recipe\Models\Settings',
                'url'         => Backend::url('recipe/recipe/config'),
                'order'       => 500,
                'keywords'    => 'Recipe Settings',
                'permissions' => ['recipe.recipe.access_settings']
            ],
        ];

    }

}
