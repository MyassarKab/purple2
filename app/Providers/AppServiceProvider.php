<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Portfolio;
use App\Studio;
use App\SiteMap;
use App\ContactInfo;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       $Portfolio=Portfolio::get();
       $Studio=Studio::get();
       $SiteMap=SiteMap::get();
       $ContactInfo=ContactInfo::first();
       View::share('Portfolio', $Portfolio);
       View::share('Studio', $Studio);
       View::share('SiteMap', $SiteMap);
       View::share('ContactInfo', $ContactInfo);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
