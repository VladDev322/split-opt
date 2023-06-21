<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
  public function index()
  {
    $orders = Order::where('status', 1)->paginate(10);
    return view('auth.orders.index', compact('orders'));
  }
  public function show(Order $order)
  {
    return view('auth.orders.show', compact('order'));
  }
}