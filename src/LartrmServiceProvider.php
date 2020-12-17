<?php

namespace edgewizz\lartrm;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LartrmServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Lartrm\Controllers\LartrmController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'lartrm');
        Blade::component('lartrm::lartrm.open', 'lartrm.open');
        Blade::component('lartrm::lartrm.index', 'lartrm.index');
        Blade::component('lartrm::lartrm.edit', 'lartrm.edit');
    }
}
