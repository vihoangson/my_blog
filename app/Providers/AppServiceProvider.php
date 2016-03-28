<?php

namespace App\Providers;

use App\Models\Blogs;
use App\Models\Comment;
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
        $menu_right_popular = Blogs::get();
        $menu_right_newest  = Blogs::orderBy("id","desc")->get();
        $menu_right_comment = Comment::all();
        view()->share([
            'menu_right_popular' => $menu_right_popular,
            'menu_right_newest'  => $menu_right_newest,
            'menu_right_comment' => $menu_right_comment,
            "current_lang"       => Session::get("current_lang"),
        ]);
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
