<?php
declare(strict_types=1);

use App\Modules\Product\Presentation\Controllers\ProductController;

Route::get('/products/{id}', [ProductController::class, 'show']);
