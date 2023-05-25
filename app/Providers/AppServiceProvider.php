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
        View::composer('*', function ($view) {
            $view->with('metaTitle', $this->getMetaTitle());
        });
    }

    private function getMetaTitle()
    {
        // You can implement your logic here to determine the meta title dynamically
        // For simplicity, let's assume a static value for demonstration purposes
        return 'My Website';
    }
}
