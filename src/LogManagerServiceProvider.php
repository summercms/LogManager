<?php

namespace Backpack\LogManager;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class LogManagerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'logmanager');
        $this->loadTranslationsFrom(realpath(__DIR__.'/resources/lang'), 'backpack');

        // publish lang files
        $this->publishes([ __DIR__.'/resources/lang' => resource_path('lang'), ], 'lang');
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Backpack\LogManager\app\Http\Controllers'], function($router)
        {
            require __DIR__.'/app/Http/routes.php';
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerLogManager();
        $this->setupRoutes($this->app->router);
    }

    private function registerLogManager()
    {
        $this->app->bind('logmanager',function($app){
            return new LogManager($app);
        });
    }
}