<?php

namespace Shaz3e\Inspire\Providers;

use Illuminate\Support\ServiceProvider;

class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     * 
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire');
    }
}