<?php

namespace App\Providers;

use App\Product;
use App\Slider;
use App\category;
use Illuminate\Support\ServiceProvider;

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
        //

            view()->composer('*',function($view){
                $view->with([
                    'data_unique_category'=>category::all(),
                ]);
            });

        view()->composer('*',function($view){
            $view->with([
                'slider'=>slider::all(),
            ]);
        });
    }
}
