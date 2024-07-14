<?php

declare(strict_types=1);

namespace App\Modules\Product\Presentation\Controllers;

use App\Modules\Product\Application\Commands\CreateProductCommand;
use App\Modules\Product\Application\Handlers\CreateProductHandler;
use App\Modules\Product\Application\Handlers\GetProductHandler;
use App\Modules\Product\Application\Queries\GetProductQuery;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(
        private readonly GetProductHandler $getHandler
    ) {}

    public function show($id)
    {
        $query = new GetProductQuery($id);
        $product = $this->getHandler->handle($query);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json($product);
    }
}
