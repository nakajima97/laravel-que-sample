<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CommentService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('commentService', CommentService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
