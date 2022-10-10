<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Channel;
use App\Http\View\Composers\ChannelsComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //option 1
        // view::share('channels',Channel::orderBy('name')->get());
        // option 2
        // View::composer(['post.*','channel.index'], function($view){
        //     $view->with('channels',Channel::orderBy('name')->get());
        // });
        View::composer('partials.channels.*', ChannelsComposer::class);
    }
}
