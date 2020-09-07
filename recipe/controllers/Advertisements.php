<?php namespace recipe\Recipe\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Advertisements extends Controller
{
    public $implement = [        
       'Backend\Behaviors\ListController',        
       'Backend\Behaviors\FormController',
       'Backend\Behaviors\RelationController',
    ];
    
    public $listConfig = ['list' => 'config_list.yaml', 'report' => 'config_list_report.yaml'];
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('recipe.Recipe', 'ads', 'advertisement');
    }

    public function report() {
        BackendMenu::setContext('recipe.Recipe', 'ads', 'report');
        $this->pageTitle = 'Ads Report';
        $this->bodyClass = 'slim-container';
        $this->vars['reportWidget'] = $this->asExtension('ListController')->makeList('report');
    }
}
