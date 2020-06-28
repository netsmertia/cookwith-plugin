<?php namespace recipe\Recipe\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Recipes extends Controller
{
    public $implement = [        
        'Backend\Behaviors\ListController',        
        'Backend\Behaviors\FormController',        
        'Backend\Behaviors\RelationController',        
        // 'Backend\Behaviors\ReorderController'    
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    // public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'manage_recipe' 
    ];
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('recipe.Recipe', 'main-recipes', 'recipes');
    }
}
