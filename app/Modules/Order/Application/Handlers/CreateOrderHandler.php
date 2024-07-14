<?php

declare(strict_types=1);

namespace App\Modules\Order\Application\Handlers;

use App\Modules\Order\Application\Commands\CreateOrderCommand;
use App\Modules\Order\Domain\Entities\Order;
use App\Modules\Order\Domain\Repositories\OrderRepository;
use App\Modules\Order\Domain\Events\OrderCreatedEvent;
use App\Modules\Order\Infrastructure\Persistence\EventStore;

class CreateOrderHandler
{
    public function __construct(
        private readonly OrderRepository $orderRepository,
        private readonly EventStore $eventStore
    ) {
    }

    public function handle(CreateOrderCommand $command): Order
    {
        $order = new Order($command->userId, $command->products);
        $this->orderRepository->save($order);

        $event = new OrderCreatedEvent($order->getId(), $order->userId, $order->products);
        $this->eventStore->store($event);

        return $order;
    }
}
