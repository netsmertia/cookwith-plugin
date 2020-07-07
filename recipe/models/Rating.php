<?php namespace recipe\Recipe\Models;

use Model;

/**
 * Model
 */
class Rating extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'recipe_recipe_rating_log';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
