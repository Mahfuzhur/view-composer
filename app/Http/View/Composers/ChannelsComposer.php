<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Channel;

class ChannelsComposer{
    public function compose(View $view){
        $channels = Channel::orderBy('name')->get();

        $view->with('channels',$channels);
    }
}