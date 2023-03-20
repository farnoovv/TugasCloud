<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // if (!empty( env(' https://ec2d-36-68-11-138.ap.ngrok.io') ) && $request->server->has('http://127.0.0.1:4040')) {
        //     $this->app['url']->forceRootUrl(env(' https://ec2d-36-68-11-138.ap.ngrok.io'));
        // }
        // // other code
    }   
}
