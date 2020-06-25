<?php namespace Recipe\Recipe\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel','RainLab.Translate.Behaviors.TranslatableModel'];
    
    

    // A unique code
    public $settingsCode = 'recipe_recipe_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';


    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public $translatable = ['about'];
}