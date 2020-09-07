<?php namespace Recipe\Recipe\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Ads Reports Back-end Controller
 */
class AdsReports extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    /**
     * @var string Configuration file for the `FormController` behavior.
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string Configuration file for the `ListController` behavior.
     */
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Recipe.Recipe', 'recipe', 'adsreports');
    }

    public function index() {
         
    }
    // public function listExtendQueryBefore($query, $definition = null)
    // {
    //     $query->select('*, select count(1) as clicks from recipe_recipe_ads_stats')
    // }
}
