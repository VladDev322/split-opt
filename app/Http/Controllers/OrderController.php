<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function index()
  {
    $orders = Order::where('status', 1)->get();
    return view('auth.orders.index', compact('orders'));
  }
}