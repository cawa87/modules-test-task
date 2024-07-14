<?php

declare(strict_types=1);

namespace App\Modules\User\Application\Handlers;

use App\Modules\User\Application\Commands\CreateUserCommand;
use App\Modules\User\Domain\Entities\User;
use App\Modules\User\Domain\Repositories\UserRepository;
use App\Modules\User\Domain\Events\UserCreatedEvent;
use App\Modules\User\Infrastructure\Persistence\EventStore;

readonly class CreateUserHandler
{
    public function __construct(
        private UserRepository $userRepository,
        private EventStore     $eventStore
    ) {
    }

    public function handle(CreateUserCommand $command): User
    {
        $user = new User($command->name, $command->email);
        $this->userRepository->save($user);

        $event = new UserCreatedEvent($user->getId(), $user->name, $user->email);
        $this->eventStore->store($event);

        return $user;
    }
}
