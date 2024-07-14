<?php

declare(strict_types=1);

namespace App\Modules\User\Presentation\Controllers;

use App\Modules\User\Application\Commands\CreateUserCommand;
use App\Modules\User\Application\Handlers\CreateUserHandler;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function __construct(
        private readonly CreateUserHandler $handler
    ) {
    }

    public function store(Request $request): JsonResponse
    {
        $command = new CreateUserCommand($request->name, $request->email);
        $user = $this->handler->handle($command);

        return response()->json($user, 201);
    }
}
