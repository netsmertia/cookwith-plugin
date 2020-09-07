<?php

use Recipe\Recipe\Classes\AdsHelper;

\Route::get('ad-target', function () {
    $adId = input('ad_id');
    $spaceId = input('space_id');
    $action = 'click';
    $redirect = input('target');
    AdsHelper::logAd($spaceId, $adId, $action, \Request::ip());
    return redirect()->to($redirect);
});