<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CommentsUpdateInDBProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("App\Services\Comments\Core\CommentsUpdate", "App\Services\Comments\CommentsUpdateInDB");
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
