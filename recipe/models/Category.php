<?php namespace recipe\Recipe\Models;

use Model;
use Recipe\Recipe\Models\Recipe;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = [
        ['category_title', 'index' => true], 
        ['category_slug', 'index' => true]
    ];


    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'recipe_recipe_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $with = [
        'translations',
    ];


    public $attachOne = [
        'image' => File::class
    ];
    public $belongsToMany = [
        'recipes' => [Recipe::class, 'table' => 'recipe_recipe_category_recipe']
    ];

    public function scopeWithTrans($query, $locale = 'ar') {
        if ($locale && \App::getLocale() == 'ar') {
            return $query->with('translations');
        }
    }
    public function scopeActive($query) {
        return $query->where('is_active', true);
    }
}
