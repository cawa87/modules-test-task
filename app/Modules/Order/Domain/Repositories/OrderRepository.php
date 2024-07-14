<?php

declare(strict_types=1);

namespace App\Modules\Order\Domain\Repositories;

use App\Modules\Order\Domain\Entities\Order;

interface OrderRepository
{
    public function save(Order $order): void;
    public function findById(int $id): ?Order;
}
