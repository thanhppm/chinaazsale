<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('*',function($v){
            $v->with([
                'cats' => User::all(),
                'listrole' => Role::all(),
            ]);
        });
    }
}
