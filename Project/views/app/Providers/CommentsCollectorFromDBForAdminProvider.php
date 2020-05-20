<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CommentsCollectorFromDBForAdminProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("App\Services\Comments\Core\CommentsCollector", "App\Services\Comments\CommentsCollectorFromDBForAdmin");
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
