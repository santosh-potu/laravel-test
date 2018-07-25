<?php

namespace SantoshLaravel\Providers;

use Illuminate\Support\ServiceProvider;

class DummyProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //echo 'Boot';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //echo 'Register';
    }
}
