<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Protype;
use Illuminate\Pagination\Paginator;

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
        view()->composer('*',function($view) {
            $view->with([
                'category' => Protype::all()
            ]);
        });
        Paginator::useBootstrap();
    }
}
