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


Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home') ->name('admin.home');

Route::resource('users', UserController::class)->except('show')->names('admin.users');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('options', OptionController::class)->except('show')->names('admin.options');

Route::resource('subcategories', SubcategoryController::class)->except('show')->names('admin.subcategories');

Route::resource('roles', RoleController::class)->except('show')->names('admin.roles');

Route::resource('products', ProductController:: class)->except('show')->names('admin.products');

Route::resource('tips', TipController::class)->except('show')->names('admin.tips');