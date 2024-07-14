<?php
declare(strict_types=1);

namespace App\Modules\Product\Application\DTO;

class ProductDTO
{
    public function __construct(
        public readonly string $name,
        public readonly float $price
    ) {}
}

