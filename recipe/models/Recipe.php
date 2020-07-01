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

    public $translatable = [ ['title', 'index' => true ], 'slug', 'ingredients', 'directions', 'content', 'seo_page_title', 'seo_metadescription'];


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

}
