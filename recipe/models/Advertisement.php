<?php namespace recipe\Recipe\Models;

use Model;

/**
 * Model
 */
class Advertisement extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'recipe_recipe_ads';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
        
    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $belongsTo = [
        'adSpace' => AdSpace::class,
    ];
}
