<?php

declare(strict_types=1);

namespace App\Modules\Order\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\Order\Domain\Repositories\OrderRepository;
use App\Modules\Order\Infrastructure\Persistence\EloquentOrderRepository
class OrderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        $this->app->bind(OrderRepository::class, EloquentOrderRepository::class);
    }
}
