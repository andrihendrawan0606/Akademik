<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Auth;

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
        Paginator::useBootstrap();

        view()->composer('layouts.admin_partial.navbar',function($view){
            // $view->auth('')
            // $auth = Auth::guard('petugas')->user();
            // $admin = ;

            $view->with('admin', Auth::guard('admin','siswa','walikelas','kaprog','hubin','guru','waka')->user()); 


        });
      
        view()->composer('layouts.admin_partial.sidebar',function($view){
            // $view->auth('')
            $view->with('admin', Auth::guard('admin','siswa','walikelas','kaprog','hubin','guru','waka')->user()); 

        });


    }
}
