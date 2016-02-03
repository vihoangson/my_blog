<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Session::put("current_lang","asdf");
        view()->share('current_lang', Session::get("current_lang"));
        //view()->share('current_lang', "12312");
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
