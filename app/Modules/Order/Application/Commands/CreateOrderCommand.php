<?php

declare(strict_types=1);

namespace App\Modules\Order\Application\Commands;

class CreateOrderCommand
{
    public function __construct(
        public readonly int $userId,
        public readonly array $products
    ) {
    }
}
