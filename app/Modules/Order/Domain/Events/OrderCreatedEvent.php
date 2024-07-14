<?php

declare(strict_types=1);

namespace App\Modules\Order\Domain\Events;

class OrderCreatedEvent
{
    public function __construct(
        public readonly int $orderId,
        public readonly int $userId,
        public readonly array $products = []
    ) {
    }
}
