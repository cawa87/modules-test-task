<?php
declare(strict_types=1);

use App\Modules\Order\Presentation\Controllers\OrderController;

Route::post('/orders', [OrderController::class, 'store']);
