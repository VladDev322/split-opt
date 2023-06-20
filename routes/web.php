<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Person\PersonOrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes([
  'reset' => false,
  'confirm' => false,
  'verify' => false,
]);

Route::get('/reset', [ResetController::class, 'reset'])->name('reset');

Route::get('/logout', [LoginController::class, 'logout'])->name('get-logout');

Route::middleware(["auth"])->group(function(){
  Route::group([ "prefix" => "person" ], function(){
      Route::get('/orders', [PersonOrderController::class, 'index'])->name('person.orders.index');
      Route::get('/orders/{order}', [PersonOrderController::class, 'show'])->name('person.orders.show');
  });

  Route::group(['prefix' => 'admin'], function () {
    Route::group(["middleware" => "is_admin"], function () {
        Route::get('/orders', [AdminOrderController::class, 'index'])->name('home');
        Route::get('/orders/{order}', [AdminOrderController::class, 'show'])->name('admin.orders.show');
    });

    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
});
  
});

Route::get('/', [MainController::class,'index'])->name('index');
Route::get('/categories', [MainController::class,'categories'])->name('categories');

Route::group(['prefix' => 'basket'], function () {
  Route::post('/add/{id}', [BasketController::class,'basketAdd'])->name('basket-add');

  Route::group([
      'middleware' => 'basket_not_empty',
  ], function () {
      Route::get('/', [BasketController::class,'basket'])->name('basket');
      Route::get('/place', [BasketController::class,'basketPlace'])->name('basket-place');
      Route::post('/remove/{id}', [BasketController::class,'basketRemove'])->name('basket-remove');
      Route::post('/place', [BasketController::class,'basketConfirm'])->name('basket-confirm');
  });
});

Route::get('/{category}', [MainController::class,'category'])->name('category');
Route::get('/{category}/{product?}', [MainController::class,'product'])->name('product');
