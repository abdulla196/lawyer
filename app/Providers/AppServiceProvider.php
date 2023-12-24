<?php

namespace App\Providers;

use App\Models\Blogs;
use App\Models\Services;
use App\Models\Settings;
use App\Models\Social;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

//        $logo       = Logo::first();
        $setting    = Settings::first();
        $socials    = Social::all();
        $services    = Services::all();
        $blogs    = Blogs::all();

        View::share('setting', $setting);
        View::share('socials', $socials);
//        View::share('logo', $logo);
        View::share('services', $services);
        View::share('blogs', $blogs);
    }
}
