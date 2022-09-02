<?php

namespace TheHocineSaad\LaravelAlgereography;

use Illuminate\Support\ServiceProvider;
use TheHocineSaad\LaravelAlgereography\Console\InstallLaravelAlgereography;

class LaravelAlgereographyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../database/migrations/' => database_path('migrations'),
            ], 'migrations');

            $this->publishes([
                __DIR__.'/../database/seeders/' => database_path('seeders'),
            ], 'seeders');

            $this->publishes([
                __DIR__.'/Models/' => app_path('Models'),
            ], 'models');

            $this->commands([
                InstallLaravelAlgereography::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
