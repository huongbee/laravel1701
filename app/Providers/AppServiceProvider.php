<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        //View::share(['menu'=>$menu]);
        View::composer(['user.layout','home'],function($view){

            $menu = [
                'Loai 1',
                'Loai 2'            
            ];
            $view->with('menu',$menu);
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
