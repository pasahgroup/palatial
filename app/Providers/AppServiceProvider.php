<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
// use App\Models\User;
// use App\Models\answer;
// use App\Models\myCompany;


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
        

             // Using view composer to set following variables globally
           view()->composer('*',function($view) {
  $view->with('percent_downpayment',0.3);
    $view->with('company_name',"Palatial Tour Company");
    view()->share('company_name',"Palatial Tour Company");
  //dd($view->percent);


            //->select('properties.property_name')->first());
             //$view->with('qnsCount', collect($qnsCount));

            // $view->with('company', myCompany::where('status','Active')->first());
        });
        //Schema::defaultStringLength(191);
    }
}
