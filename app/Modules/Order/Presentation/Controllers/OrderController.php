<?php

declare(strict_types=1);

namespace App\Modules\Order\Presentation\Controllers;

use App\Modules\Order\Application\Commands\CreateOrderCommand;
use App\Modules\Order\Application\Handlers\CreateOrderHandler;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OrderController extends Controller
{
    public function __construct(
        private readonly CreateOrderHandler $handler
    ) {
    }

    public function store(Request $request)
    {
        $command = new CreateOrderCommand($request->user_id, $request->products);
        $order = $this->handler->handle($command);

        return response()->json($order, 201);
    }
}
