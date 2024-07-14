<?php

declare(strict_types=1);

namespace App\Modules\Product\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\Order\Domain\Repositories\OrderRepository;

class ProductServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        $this->app->bind(ProductRepository::class, EloquentProductRepository::class);
    }
}
