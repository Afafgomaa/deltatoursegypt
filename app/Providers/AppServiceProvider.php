<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Pages;
use App\post;
use App\Accommodations;
use App\Programs;
use App\Addon;
use App\Sights;
use App\river_excursion;

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
        view()->share('navbar_links', Pages::where('parent_id', 0)->get());
        view()->share('allPages', Pages::all());
        view()->share('posts', post::all());
        view()->share('accommodations', Accommodations::all());
        view()->share('programs', Programs::all());
        view()->share('river_excursions', river_excursion::all());
        view()->share('addons', Addon::all());
        view()->share('sights', Sights::all());
        view()->share('title','Tours to egypt | Budget Tours to egypt | Luxury Tours to egypt');
        
        
    }
}
