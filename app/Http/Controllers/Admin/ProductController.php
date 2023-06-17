<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $products = Product::get();
    return view('auth.products.index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('auth.products.form');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    Product::create($request->all());
    return redirect()->route('products.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Product $product)
  {
    return view('auth.products.show', compact('product'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Product $product)
  {
    return view('auth.products.form', compact('product'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Product $product)
  {
    $product->update($request->all());
    return redirect()->route('products.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Product $product)
  {
    $product->delete();
    return redirect()->route('products.index');
  }
}