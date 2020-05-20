<?php

namespace App\Providers;

use App\Services\Comments\Core\CommentsSaveFiles;
use Illuminate\Support\ServiceProvider;

class CommentsSaveFileInToFolderProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("App\Services\Comments\Core\CommentsSaveFiles", "App\Services\Comments\CommentsSaveFileInToFolder");
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
