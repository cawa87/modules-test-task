<?php

declare(strict_types=1);

namespace App\Modules\User\Domain\Events;

class UserCreatedEvent
{
    public function __construct(
        public readonly int $userId,
        public readonly string $name,
        public readonly string $email
    ) {
    }
}
