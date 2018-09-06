<?php

namespace :uc:vendor\:uc:package;

use Illuminate\Support\ServiceProvider;

class :uc:packageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', ':lc:vendor');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/config.php' => config_path(':lc:package.php'),
            ], ':lc:package.config');

            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/:lc:vendor'),
            ], ':lc:package.lang');

            $this->commands([
                //
            ]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', ':lc:package');

        $this->app->singleton(':lc:package', function ($app) {
            return new :uc:package;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [':lc:package'];
    }
}
