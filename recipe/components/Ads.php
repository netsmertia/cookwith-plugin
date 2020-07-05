<?php namespace Recipe\Recipe\Components;

use Cms\Classes\ComponentBase;
use recipe\Recipe\Controllers\Advertisements;
use recipe\Recipe\Models\AdSpace;
use recipe\Recipe\Models\Advertisement;

class Ads extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Advertisement',
            'description' => 'Load a advertisement by ad_id'
        ];
    }

    public function defineProperties()
    {
        return [
            'space_code' => [
                'title'             => 'Ad Space Code',
                'default'           =>  null,
                'type'              => 'string',
            ],
        ];
    }

    public function getAd($spaceCode = null) {
        $spaceCode = $spaceCode == null ? $this->property('space_code'): $spaceCode;
        if ($spaceCode == null) {
            return;
        } else {
            $adSapce = AdSpace::with(['ads' => function ($q) {
                $q->active();
            }, 'ads.image'])->where('space_code', $spaceCode)->active()->first();
            return $adSapce;
        }
    }
}
