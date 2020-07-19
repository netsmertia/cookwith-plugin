<?php namespace recipe\Recipe\Models;

use Model;
use recipe\Recipe\Controllers\Advertisements;

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

    public $belongsToMany = [
        'ads' => [
            Advertisement::class,
            'table' => 'recipe_recipe_ads_adspace',
            'key'      => 'ad_space_id',
            'otherKey' => 'ad_id'
        ],
    ];
    public function scopeActive($query) {
        return $query->where('is_active', true);
    }
}
