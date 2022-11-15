<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        Schema::defaultStringLength(191);
        \Cart::session(Auth::user()->id ?? 1);

        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }

        View::composer('*', function ($view) {

            $data = [
                'global_shipping_cost' => \App\Models\Setting::getShippingCost()
            ];

            View::share($data);
        });
    }
}
