<?php

namespace App\Providers;

use App\Services\MailchimpNewsletter;
use App\Services\Newsletter;
use Illuminate\Database\Eloquent\Model; //imported for Model::unguard();
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient; // had to add this. see lesson 61

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind(Newsletter::class, function () {
            $client = (new ApiClient)->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us17'
        ]);

            return new MailchimpNewsletter($client);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard(); // alternative to protected $guarded = []; in models

        Gate::define('admin', function (\App\Models\User $user) {
            return $user->username === 'brucebanner';
        });

        // // alternative to code in views\components\layout.blade.php
        // Blade::if('admin', function () {
        //     return request()->user()->can('admin');
        // });
    }
}
