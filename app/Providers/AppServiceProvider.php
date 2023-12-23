<?php

namespace App\Providers;

use App\Models\Blogs;
use App\Models\Services;
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
//        $setting    = Setting::first();
//        $socials    = Social::all();
        $services    = Services::all();
        $blogs    = Blogs::all();

//        View::share('setting', $setting);
//        View::share('socials', $socials);
//        View::share('logo', $logo);
        View::share('services', $services);
        View::share('blogs', $blogs);
    }
}
