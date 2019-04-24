<?php

namespace App\Providers;
use Validator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Validator::extend('clientes_cp', function($attribute, $value, $parameters)
            {
                return preg_match('/[0-5][1-9]{3}[0-9]$/',$value);
            });
        Schema::defaultStringLength(191);
    }
}
