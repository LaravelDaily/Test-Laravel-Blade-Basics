<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
        /**
         * View Composer
         * This approach allows to set the [$metaTitle] value centrally,
         * making it easier to manage and update across your application.
         */
        View::composer('*', function ($view) {
            $view->with('metaTitle', 'Blade Test');
        });
    }
}
