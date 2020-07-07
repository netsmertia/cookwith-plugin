<?php namespace recipe\Recipe\Models;

use Model;

/**
 * Model
 */
class Recipe extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public $translatable = [ 
        ['title', 'index' => true ], 
        ['slug',  'index' => true ],
        'ingredients', 'directions', 'content', 'seo_page_title', 'seo_metadescription'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'recipe_recipe_recipe';

    public $jsonable = ['ingredients', 'directions', ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $gaurded = [];
    
    // public $with = [
    //     'translations',
    // ];

    public $attachOne = [
        'img' => File::class,
    ];
    public $belongsToMany = [
        'categories' => [Category::class, 'table' => 'recipe_recipe_category_recipe'],
        'related' => [
            Recipe::class, 
            'table'  => 'recipe_recipe_related',
            'key'      => 'recipe_id',
            'otherKey' => 'related_id'
        ]
    ];

    public function scopeWithTrans($query, $locale = 'ar') {
        if ($locale && \App::getLocale() == 'ar') {
            return $query->with('translations');
        }
    }

    public function scopePublished($query) {
        return $query->where('is_published', true);
    }
    public function scopeActive($query) {
        return $query->where('is_active', true);
    }
}
