<?php

namespace Vugrinchev\LaravelFnac;

use Illuminate\Support\ServiceProvider;

class FnacServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Boot config file
        $this->publishes([
            __DIR__.'/Config/fnac.php' => config_path('fnac.php'),
        ], 'config');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Config
        $this->mergeConfigFrom( __DIR__.'/Config/fnac.php', 'fnac');

        $this->app->singleton('fnac', function () {
            return new FnacServices();
        });
    }


}