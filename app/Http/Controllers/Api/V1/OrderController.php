<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Resources\V1\OrderResource;
use App\Http\Resources\V1\OrderCollection;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest('id')->paginate();

        return new OrderCollection($orders);
    }

    public function show(Order $order)
    {
        return new OrderResource($order);
    }

}
