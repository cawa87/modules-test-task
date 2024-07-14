<?php
declare(strict_types=1);

namespace App\Modules\Product\Infrastructure\Persistence;

use App\Modules\Product\Domain\Entities\Product;
use App\Modules\Product\Domain\Repositories\ProductRepository;

class EloquentProductRepository implements ProductRepository
{
    public function save(Product $product): void
    {
        $eloquentProduct = EloquentProduct::create([
            'name' => $product->name,
            'price' => $product->price,
        ]);
        $product->setId($eloquentProduct->id);
    }

    public function findById(int $id): ?Product
    {
        $eloquentProduct = EloquentProduct::find($id);
        return $eloquentProduct ? new Product($eloquentProduct->name, $eloquentProduct->price) : null;
    }
}

