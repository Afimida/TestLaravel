<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidateDataFromCommentsFormProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind("App\Services\Validator\Core\ValidateData", "App\Services\Validator\ValidateDataFromCommentsForm");
    }
}
