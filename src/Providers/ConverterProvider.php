<?php

namespace Larapackage\Imageconverter\Providers;

use Illuminate\Support\ServiceProvider;
use Larapackage\Imageconverter\commands\PublishAsset;

class ConverterProvider extends ServiceProvider
{
    public function register()
    {
      $this->app->singleton('laravel-converter:publish', function ($app) {
        return new PublishAsset();
       });

      $this->commands([
          'laravel-converter:publish',
      ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
