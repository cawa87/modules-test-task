<?php

declare(strict_types=1);

namespace App\Modules\User\Infrastructure\Persistence;

use App\Modules\User\Domain\Events\UserCreatedEvent;

class EventStore
{
    public function store(UserCreatedEvent $event): void
    {
        // @TODO Store the event (e.g., in a database table)
        // @TODO Example using Eloquent model (assuming Event model exists):
        /*\App\Models\Event::create([
            'type' => get_class($event),
            'payload' => json_encode([
                'userId' => $event->userId,
                'name' => $event->name,
                'email' => $event->email,
            ]),
        ]);*/
    }
}
