<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Visitors;
use Illuminate\Support\Facades\View;


class VisitorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
   
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app['router']->pushMiddlewareToGroup('web', \App\Http\Middleware\TrackVisitors::class);
        View::share('visitorCount',
        Visitors::count());
    }
}
