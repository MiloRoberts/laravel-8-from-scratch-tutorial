<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model; //imported for Model::unguard();
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
        Model::unguard(); // alternative to protected $guarded = []; in models
    }
}
