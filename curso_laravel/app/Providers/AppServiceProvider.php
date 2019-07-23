<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\Schema;     //Versiones antiguas de mysql

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Versiones antiguas de mysql
        //Schema::defaultStringLength(191);
    }
}
