<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        //不管用，先用下面的方法
        //View::share('adminInfo', session('user'));

        view()->Composer('public.app', function($view){
            $view->with('adminInfo', session('user'));
        });
    }
}