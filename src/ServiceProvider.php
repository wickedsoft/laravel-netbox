<?php

namespace wickedsoft\NetBox;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/netbox.php' => config_path('netbox.php')
        ], 'config');

        \Auth::provider('netbox', function ($app, array $config) {
            return new \wickedsoft\NetBox\Providers\HostFactProvider();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['wickedsoft\NetBox\NetBox', 'NetBox'];
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('wickedsoft\NetBox\NetBox', function ($app) {
            $netBox = new NetBox($app);
            $netBox->panel($netBox->getDefaultPanel());

            return $netBox;
        });

        $this->app->alias('wickedsoft\NetBox\NetBox', 'NetBox');
    }
}
