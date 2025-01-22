<?php

namespace App\Providers;

use App\Repositories\ArticleRepository;
use App\Repositories\ArticleRepositoryInterface;
use App\Repositories\HistoryRepository;
use App\Repositories\HistoryRepositoryInterface;
use App\Repositories\SubscriptionRepository;
use App\Repositories\SubscriptionRepositoryInterface;
use App\Repositories\ThemeRepository;
use App\Repositories\ThemeRepositoryInterface;
use App\Services\ArticleService;
use App\Services\ArticleServiceInterface;
use App\Services\HistoryService;
use App\Services\HistoryServiceInterface;
use App\Services\SubscriptionService;
use App\Services\SubscriptionServiceInterface;
use App\Services\ThemeService;
use App\Services\ThemeServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Articles Binding
        $this->app->bind(ArticleRepositoryInterface::class, ArticleRepository::class);
        $this->app->bind(ArticleServiceInterface::class, ArticleService::class);
    }



    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
