<?php
declare(strict_types=1);

namespace App\Modules\Product\Domain\Repositories;

use App\Modules\Product\Domain\Entities\Product;

interface ProductRepository
{
    public function save(Product $product): void;
    public function findById(int $id): ?Product;
}
