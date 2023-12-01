<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\TipController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AgendaController;
use App\Http\Controllers\Api\ServiceController;


// //PRODUCTOS
// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::get('/products/{id}', [ProductController::class, 'show']);
// Route::put('/products/{products}', [ProductController::class, 'update']);
// Route::delete('/products/{products}', [ProductController::class, 'destroy']);

// //TIPS
// Route::get('/tips', [TipController::class, 'index']);
// Route::post('/tips', [TipController::class, 'store']);
// Route::get('/tips/{tips}', [TipController::class, 'show']);
// Route::put('/tips/{tips}', [TipController::class, 'update']);
// Route::delete('/tips/{tips}', [TipController::class, 'destroy']);

// //USERS
// Route::get('/users', [UserController::class, 'index']);
// Route::post('/users', [UserController::class, 'store']);
// //Route::get('/users/{users}', [UserController::class, 'show']);
// Route::put('/users/{users}', [UserController::class, 'update']);
// Route::delete('/users/{users}', [UserController::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('users', UserController::class)->names('usuarios');
Route::apiResource('products', ProductController::class)->names('productos');
Route::apiResource('tips', TipController::class)->names('belleza');
Route::apiResource('services', ServiceController::class)->names('servicios');
Route::apiResource('agendas', AgendaController::class)->names('servicius');

Route::controller(UserController::class)->group(function () {
    Route::post('/login', 'login');
});
Route::controller(UserController::class)->group(function () {
    Route::post('/register', 'register');
});


