<?php

namespace Converterlaravelpackage\imageconverterpackage\Providers;
use Converterlaravelpackage\imageconverterpackage\commands\PublishAsset;

use Illuminate\Support\ServiceProvider;

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
