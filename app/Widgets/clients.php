<?php

namespace App\Widgets;

use App\Models\Client;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class clients extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Client::count();
        $string = trans_choice('voyager::dimmer.client', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-pirate-swords',
            'title'  => "{$count} ",
            'text'   => __('client', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'clients',
                'link' => route('voyager.clients.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/01.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}
