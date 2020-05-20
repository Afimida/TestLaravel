<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CommentsWriterToDBProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("App\Services\Comments\Core\CommentsWriter", "App\Services\Comments\CommentsWriterToDB");
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
