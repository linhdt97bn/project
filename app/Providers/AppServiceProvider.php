<?php

namespace App\Providers;

use App\DiaDiem;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('client.layout_client.header_client', function($view){
            $diadiem = DiaDiem::all();
            $view->with('diadiem',$diadiem);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
