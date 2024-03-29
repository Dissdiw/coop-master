<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use TCG\Voyager\Facades\Voyager as VoyagerFacade;

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
    public function boot(): void
    {
        // VoyagerFacade::addFormField("App\\Admin\\FormFields\\CustomFieldHandler");
    }
}
