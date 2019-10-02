<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\course;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('clients/layout/header/header', function($view){
            $course = course::all();
            $view->with('course', $course);
        });

        view()->composer('clients/layout/register/register', function($view){
            $getCourse = course::all();
            $view->with('getCourse', $getCourse);
        });

        view()->composer('clients/registerOnline/registerOnline', function($view){
            $getCourse = course::all();
            $view->with('getCourse', $getCourse);
        });
    }
}
