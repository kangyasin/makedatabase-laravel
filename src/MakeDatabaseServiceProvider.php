<?php

namespace kangyasin\makedatabase;

use Illuminate\Support\ServiceProvider;

class MakeDatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('kangyasin\makdatabase\Controller');
    }
}
