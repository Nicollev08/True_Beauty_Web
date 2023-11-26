<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;

use App\Livewire\ShoppingCart;
use App\Livewire\CreateOrder;
use App\Livewire\PaymentOrder;

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

Route::get('/', WelcomeController::class);

// Route::get("/", function () {
//     return view("welcome");
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('search', SearchController::class)->name('search');

Route::get('products/show/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('categories/show/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('shopping-cart', ShoppingCart::class)->name('shopping.cart');

//Route::get('shopping-cart', [ShoppingCartController::class, 'show'])->name('shopping.cart');


Route::middleware(['auth'])->group(function(){

    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');

    Route::get('orders/create', CreateOrder::class)->name('orders.create');

    Route::get('orders/{order}/payment', PaymentOrder::class)->name('orders.payment');

    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');


    // Route::get('orders/{order}/pay', [OrderController::class, 'pay'])->name('orders.pay');

    // Route::post('webhooks', WebhooksController::class);

});


Route::get('/auth/{driver}/redirect', [AuthController::class, 'redirect']);
 
Route::get('/auth/{driver}/callback', [AuthController::class, 'callback']);