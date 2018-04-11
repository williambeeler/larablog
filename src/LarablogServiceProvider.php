<?php

namespace WilliamBeeler\LaraBlog;

use Illuminate\Support\ServiceProvider;

class LarablogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //Routes
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadRoutesFrom(__DIR__.'/routes/channels.php');
        $this->loadRoutesFrom(__DIR__.'/routes/console.php');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
