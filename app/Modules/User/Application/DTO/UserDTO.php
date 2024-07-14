<?php

declare(strict_types=1);

namespace App\Modules\User\Application\DTO;

class UserDTO
{
    public function __construct(
        public readonly string $name,
        public readonly string $email
    ) {
    }
}
