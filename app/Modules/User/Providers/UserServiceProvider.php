<?php

declare(strict_types=1);

namespace App\Modules\User\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\User\Infrastructure\Persistence\EloquentUserRepository;
use App\Modules\User\Domain\Repositories\UserRepository;

class UserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        $this->app->bind(UserRepository::class, EloquentUserRepository::class);
    }
}
