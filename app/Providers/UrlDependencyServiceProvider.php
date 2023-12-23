<?php

namespace App\Providers;

use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class UrlDependencyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind('YourDependency', function ($app) {
            // Get the URL parameter value using the Route facade
            $parameterValue = Route::input('url');

            // Your custom logic to resolve the dependency based on the URL parameter
            // Use $parameterValue to determine which instance of the dependency to return

            return new YourDependencyImplementation($parameterValue);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
