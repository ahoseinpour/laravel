<?php

namespace Ghasedak;

use Illuminate\Support\ServiceProvider;

class GhasedakServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // bing
        $this->app->bind('Ghasedak' ,function (){
            return new GhasedakApi();
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
