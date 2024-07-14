<?php
declare(strict_types=1);

namespace App\Modules\Product\Application\Handlers;

use App\Modules\Product\Application\Queries\GetProductQuery;
use App\Modules\Product\Domain\Entities\Product;
use App\Modules\Product\Domain\Repositories\ProductRepository;

class GetProductHandler
{
    public function __construct(
        private readonly ProductRepository $productRepository
    ) {}

    public function handle(GetProductQuery $query): ?Product
    {
        return $this->productRepository->findById($query->id);
    }
}
