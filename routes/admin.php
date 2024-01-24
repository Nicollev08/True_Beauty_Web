<?php

use App\Http\Controllers\Admin\AgendaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TipController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;

use App\Http\Controllers\Admin\ProfileController;

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ShowDepartmentController;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Dompdf\Dompdf;


Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

//REPORTES
Route::get('categories/pdf', [CategoryController::class, 'pdf'])->name('admin.categories.pdf');
Route::get('categories/excel', [CategoryController::class, 'excel'])->name('admin.categories.excel');

Route::get('products/pdf', [ProductController::class, 'pdf'])->name('admin.products.pdf');
Route::get('products/excel', [ProductController::class, 'excel'])->name('admin.products.excel');

Route::get('tips/pdf', [TipController::class, 'pdf'])->name('admin.tips.pdf');
Route::get('tips/excel', [TipController::class, 'excel'])->name('admin.tips.excel');

Route::get('subcategories/pdf', [SubcategoryController::class, 'pdf'])->name('admin.subcategories.pdf');
Route::get('subcategories/excel', [SubcategoryController::class, 'excel'])->name('admin.subcategories.excel');

Route::get('services/pdf', [ServiceController::class, 'pdf'])->name('admin.services.pdf');
Route::get('services/excel', [ServiceController::class, 'excel'])->name('admin.services.excel');

Route::get('users/pdf', [UserController::class, 'pdf'])->name('admin.users.pdf');
Route::get('users/excel', [UserController::class, 'excel'])->name('admin.users.excel');



Route::resource('users', UserController::class)->except('show')->names('admin.users');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('subcategories', SubcategoryController::class)->except('show')->names('admin.subcategories');

Route::resource('roles', RoleController::class)->except('show')->names('admin.roles');

Route::resource('services', ServiceController::class)->except('show')->names('admin.services');

Route::resource('products', ProductController:: class)->except('show')->names('admin.products');

Route::resource('tips', TipController::class)->except('show')->names('admin.tips');

Route::resource('agendas', AgendaController::class)->only('index')->names('admin.agendas');

Route::get('orders', [OrderController::class, 'index'])->name('admin.orders.index');
Route::get('orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');

Route::resource('departments', DepartmentController::class)->except('show')->names('admin.departments');

Route::resource('cities', CityController::class)->except('show')->names('admin.cities');




Route::middleware(['auth'])->group(function () {
    
    Route::resource('user', ProfileController::class)->except('index');
});
