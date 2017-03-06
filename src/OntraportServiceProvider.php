<?php

namespace Wsio\Ontraport;

use Wsio\Ontraport\Ontraport;
use Illuminate\Support\ServiceProvider;

class OntraportServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/ontraport.php' => config_path('ontraport.php'),
        ], 'config');
    }

    /*
     * Register the service provider.
     *
     * @return void
    */
    public function register()
    {
        $this->app->singleton(Ontraport::class, function () {
            $config = config('ontraport');

            return new Ontraport($config['app_id'], $config['api_key']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [Ontraport::class];
    }
}
