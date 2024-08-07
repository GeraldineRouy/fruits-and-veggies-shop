<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showAllOrders() {
        $orders = Order::all();
        return view('displayAllOrders', ['ordersList' => $orders]);

    }

    public function showOrdersOfOneProduct() {
        $orders = Product::find(1)->orders;
        return view('displayOrdersFromOneProduct', ['ordersList' => $orders]);
    }
}
