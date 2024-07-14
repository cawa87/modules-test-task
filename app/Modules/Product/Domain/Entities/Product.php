<?php
declare(strict_types=1);

namespace App\Modules\Product\Domain\Entities;

class Product
{
    private ?int $id = null;

    public function __construct(
        public readonly string $name,
        public readonly float $price
    ) {}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
