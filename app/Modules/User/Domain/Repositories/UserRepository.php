<?php

declare(strict_types=1);

namespace App\Modules\User\Domain\Repositories;

use App\Modules\User\Domain\Entities\User;

interface UserRepository
{
    public function save(User $user): void;
    public function findById(int $id): ?User;
}
