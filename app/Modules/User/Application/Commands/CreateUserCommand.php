<?php

declare(strict_types=1);

namespace App\Modules\User\Application\Commands;

readonly class CreateUserCommand
{
    public function __construct(
        public string $name,
        public string $email
    ) {
    }
}
