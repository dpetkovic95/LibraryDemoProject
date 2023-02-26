<?php

namespace App\Providers;

use App\Repositories\Interfaces\AuthorRepositoryInterface;
use AuthorRepository;
use BookRepository;
use BookRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use UserRepository;
use UserRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthorRepositoryInterface::class, AuthorRepository::class);
        $this->app->bind(BookRepositoryInterface::class, BookRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
