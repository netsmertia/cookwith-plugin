<?php namespace recipe\Recipe\Models;

use Model;

/**
 * Model
 */
class Advertisement extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'recipe_recipe_ads';

    public $translatable = [
        'content'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
        
    public $attachOne = [
        'image' => File::class,
    ];

    public $belongsToMany = [
        'adSpaces' => [
            AdSpace::class,
            'table' => 'recipe_recipe_ads_adspace',
            'key'      => 'ad_id',
            'otherKey' => 'ad_space_id'
        ],
    ];
    public function scopeActive($query) {
        return $query->where('is_active', true);
    }
}
