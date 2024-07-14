<?php

declare(strict_types=1);

namespace App\Modules\Order\Domain\Entities;

use App\Modules\Product\Domain\Entities\Product;

class Order
{
    private ?int $id = null;

    public function __construct(
        public readonly int $userId,
        public readonly array $products = []
    ) {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }
}
