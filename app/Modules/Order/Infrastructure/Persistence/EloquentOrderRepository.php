<?php

declare(strict_types=1);

namespace App\Modules\Order\Infrastructure\Persistence;

use App\Modules\Order\Domain\Entities\Order;
use App\Modules\Order\Domain\Repositories\OrderRepository;

class EloquentOrderRepository implements OrderRepository
{
    public function save(Order $order): void
    {
        $eloquentOrder = EloquentOrder::create([
            'user_id' => $order->userId,
            'products' => json_encode($order->products),
        ]);
        $order->setId($eloquentOrder->id);
    }

    public function findById(int $id): ?Order
    {
        $eloquentOrder = EloquentOrder::find($id);
        return $eloquentOrder ? new Order($eloquentOrder->user_id, json_decode($eloquentOrder->products, true)) : null;
    }
}
