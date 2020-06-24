<?php namespace Recipe\Recipe\Components;

use Cms\Classes\ComponentBase;
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
            'ad_id' => [
                'title'             => 'Ad ID',
                'description'       => 'Advertisement ID',
                'default'           =>  null,
                'type'              => 'string',
            ],
        ];
    }

    public function getAd($adId = null) {
        $adId = $adId == null ? $this->property('ad_id'): $adId;
        if ($adId == null) {
            return;
        } else {
            return Advertisement::with('image')->where('ad_id', $adId)->first();
        }
    }
}
