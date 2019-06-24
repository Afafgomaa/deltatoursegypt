<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Pages;
use App\post;
use App\Accommodations;

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
        Schema::defaultStringLength(191);
        view()->share('pages', Pages::where('parent_id', 0)->get());
        view()->share('posts', post::all());
        view()->share('accommodations', Accommodations::all());
        
        
    }
}
