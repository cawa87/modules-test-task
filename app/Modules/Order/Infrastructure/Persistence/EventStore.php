<?php

declare(strict_types=1);

namespace App\Modules\Order\Infrastructure\Persistence;

use App\Modules\Order\Domain\Events\OrderCreatedEvent;

class EventStore
{
    public function store(OrderCreatedEvent $event): void
    {
        // @TODO Store the event (e.g., in a database table)
        // @TODO Example using Eloquent model (assuming Event model exists)
    }
}
