<?php namespace Recipe\Recipe\Classes;

use Recipe\Recipe\Models\AdsStats;
use Sinergi\BrowserDetector\Browser;

class AdsHelper {
    public static function logAd($adSpaceId, $adId, $action, $ip) {
        $browser = new Browser();
        $stats = new AdsStats();
        $stats->adspace_id = $adSpaceId;
        $stats->ads_id = $adId;
        $stats->ip = $ip;
        $stats->browser = $browser->getName();
        $stats->action = $action;
        $stats->save();
    }
}