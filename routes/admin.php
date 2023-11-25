<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TipController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\ProfileController;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Dompdf\Dompdf;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

//REPORTES
Route::get('categories/pdf', [CategoryController::class, 'pdf'])->name('admin.categories.pdf');
Route::get('categories/excel', [CategoryController::class, 'excel'])->name('admin.categories.excel');

Route::get('products/pdf', [ProductController::class, 'pdf'])->name('admin.products.pdf');
Route::get('products/excel', [ProductController::class, 'excel'])->name('admin.products.excel');

Route::get('tips/pdf', [TipController::class, 'pdf'])->name('admin.tips.pdf');
Route::get('tips/excel', [TipController::class, 'excel'])->name('admin.tips.excel');

Route::get('subcategories/pdf', [SubcategoryController::class, 'pdf'])->name('admin.subcategories.pdf');
Route::get('subcategories/excel', [SubcategoryController::class, 'excel'])->name('admin.subcategories.excel');

Route::get('options/pdf', [OptionController::class, 'pdf'])->name('admin.options.pdf');
Route::get('options/excel', [OptionController::class, 'excel'])->name('admin.options.excel');

Route::get('users/pdf', [UserController::class, 'pdf'])->name('admin.users.pdf');
Route::get('users/excel', [UserController::class, 'excel'])->name('admin.users.excel');


Route::resource('users', UserController::class)->except('show')->names('admin.users');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');


Route::resource('options', OptionController::class)->except('show')->names('admin.options');

Route::resource('subcategories', SubcategoryController::class)->except('show')->names('admin.subcategories');

Route::resource('roles', RoleController::class)->except('show')->names('admin.roles');

Route::resource('products', ProductController:: class)->except('show')->names('admin.products');

Route::resource('tips', TipController::class)->except('show')->names('admin.tips');


Route::middleware(['auth'])->group(function () {
    
    Route::resource('user', ProfileController::class)->except('index');
});
