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

    public $belongsToMany = [
        'adSpaces' => [
            AdSpace::class,
            'table' => 'recipe_recipe_ads_adspace',
            'key'      => 'ad_id',
            'otherKey' => 'adspace_id'
        ],
    ];
    public function scopeActive($query) {
        return $query->where('is_active', true);
    }
}
