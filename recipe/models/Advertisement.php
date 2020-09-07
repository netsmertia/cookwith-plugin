<?php namespace recipe\Recipe\Models;

use Model;
use Recipe\Recipe\Models\AdsStats;

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

    public $hasMany = [
        'clicks' => [AdsStats::class, 'count' => 'true', 'key' => 'ads_id', 'conditions' => "action = 'click'"],
        'clicks7days' => [AdsStats::class, 'count' => 'true', 'key' => 'ads_id', 'conditions' => "action = 'click' and CURDATE() - INTERVAL 7 DAY AND CURDATE()"],
        'clicks30days' => [AdsStats::class, 'count' => 'true', 'key' => 'ads_id', 'conditions' => "action = 'click' and CURDATE() - INTERVAL 30 DAY AND CURDATE()"],
        'views' => [AdsStats::class, 'count' => 'true', 'key' => 'ads_id', 'conditions' => "action = 'view'"],
        'views7days' => [AdsStats::class, 'count' => 'true', 'key' => 'ads_id', 'conditions' => "action = 'view' and CURDATE() - INTERVAL 7 DAY AND CURDATE()"],
        'views30days' => [AdsStats::class, 'count' => 'true', 'key' => 'ads_id', 'conditions' => "action = 'view' and CURDATE() - INTERVAL 30 DAY AND CURDATE()"],
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
