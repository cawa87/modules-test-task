<?php

declare(strict_types=1);

namespace App\Modules\User\Infrastructure\Persistence;

use App\Modules\User\Domain\Entities\User;
use App\Modules\User\Domain\Repositories\UserRepository;

class EloquentUserRepository implements UserRepository
{
    public function save(User $user): void
    {
        $eloquentUser = EloquentUser::create([
            'name' => $user->name,
            'email' => $user->email,
            'password' => md5((string)rand(1, 10000))
        ]);
        $user->setId($eloquentUser->id);
    }

    public function findById(int $id): ?User
    {
        $eloquentUser = EloquentUser::find($id);
        return $eloquentUser ? new User($eloquentUser->name, $eloquentUser->email) : null;
    }
}
