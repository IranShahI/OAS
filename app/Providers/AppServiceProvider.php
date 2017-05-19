<?php

namespace App\Providers;

use App\postLookup;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\access;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('auth.register',function ($view)
        {
            $view->with('posts',postLookup::all());
        });
        view()->composer('staff.*',function ($view) {
            $postID = Auth::user()->postLookups_postID;
            $access = access::where('postID', $postID)->first();
            $accessArray = explode(" ", $access->accessUnits);
            $view->with('accessArray', $accessArray);

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
