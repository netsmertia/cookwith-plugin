<?php namespace Nets\Zoomservice\Components;

use Cms\Classes\ComponentBase;

use Recipe\Recipe\Models\Recipe;

class SingleRecipe extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Single Recipe',
            'description' => 'Show a single recipe'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    public function onRun()
    {
        $orders = Order::with('orderItems', 'agent', 'orderItems.service', 'orderItems.subService')->where('user_id', Auth::getUser()->id)->get();
        $this->page['orders'] = $orders;
        debug($orders->toArray());
    }
}
