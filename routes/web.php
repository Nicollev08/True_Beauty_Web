<?php

use App\Http\Controllers\EventoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home.index');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['middleware' => ['auth']], function () {

    Route::resource('/eventos', EventoController::class)->only(['index', 'store']);

    Route::post('/eventos/mostrar', [EventoController::class, 'show']);

    Route::post('/eventos/edit/{id}', [EventoController::class, 'edit']);

    Route::post('/eventos/update/{evento}', [EventoController::class, 'update']);

    Route::post('/eventos/eliminar/{id}', [EventoController::class, 'destroy']);
});


include __DIR__.'/api.php';