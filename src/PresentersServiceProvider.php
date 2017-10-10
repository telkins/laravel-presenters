<?php 

namespace Olymbytes\Presenters;

use Illuminate\Support\ServiceProvider;

class PresentersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/presenters.php' => config_path('presenters.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__ . '/../config/presenters.php', 'presenters');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
