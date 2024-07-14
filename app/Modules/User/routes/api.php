<?php

declare(strict_types=1);

use App\Modules\User\Presentation\Controllers\UserController;

Route::post('/users', [UserController::class, 'store']);
