<?php namespace recipe\Recipe\Models;

use Model;

/**
 * Model
 */
class AdSpace extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'recipe_recipe_adspace';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasOne = [
        'ad' => Advertisement::class,
    ];
}
