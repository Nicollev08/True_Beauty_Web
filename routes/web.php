<?php


use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EventoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;

use App\Livewire\Comments;
use App\Livewire\ShoppingCart;
use App\Livewire\CreateOrder;
use App\Livewire\PaymentOrder;
use App\Livewire\Services;

Route::get('/', WelcomeController::class)->name('/');

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




Route::middleware(['auth'])->group(function(){

    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');

    Route::get('orders/create', CreateOrder::class)->name('orders.create');

    Route::get('orders/{order}/payment', PaymentOrder::class)->name('orders.payment');

    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');

    //FACTURA
    Route::get('user/order/pdf/{orderId}', [UserController::class, 'pdf'])->name('users.orders.pdf');

    //COMENTARIOS
    Route::resource('comments', CommentController::class)->only('store','update', 'destroy')->names('comments');
    Route::get('comments', Comments::class);

    /////AGENDA

    Route::resource('/eventos', EventoController::class)->only(['index', 'store']);

    Route::post('/eventos/mostrar', [EventoController::class, 'show']);

    Route::post('/eventos/edit/{id}', [EventoController::class, 'edit']);

    Route::post('/eventos/update/{evento}', [EventoController::class, 'update']);

    Route::post('/eventos/eliminar/{id}', [EventoController::class, 'destroy']);

});

Route::get('services', [Services::class, 'render'])->name('view-services');

///LOGIN FACEBOOK Y GOOGLE
Route::get('/auth/{driver}/redirect', [AuthController::class, 'redirect']);
 
Route::get('/auth/{driver}/callback', [AuthController::class, 'callback']);
