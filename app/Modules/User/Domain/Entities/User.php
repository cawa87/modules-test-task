<?php

declare(strict_types=1);

namespace App\Modules\User\Domain\Entities;

class User
{
    public function __construct(
        public readonly string $name,
        public readonly string $email
    ) {
    }

    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
