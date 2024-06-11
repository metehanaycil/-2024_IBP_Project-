<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



Route::get('/', [HomeController::class, 'home']);

Route::get('/dashboard', [HomeController::class, 'login_home'])
    ->middleware(['auth', 'verified'])->name('dashboard');;



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('admin/dashboard', [HomeController::class, 'index'])->
    middleware(['auth', 'admin']);

route::get('view_category', [AdminController::class, 'index'])->middleware(['auth', 'admin']);

route::get('view_users', [AdminController::class, 'view_users'])->middleware(['auth', 'admin']);

route::post('add_category', [AdminController::class, 'add_category'])->middleware(['auth', 'admin']);


route::get('delete_category/{id}',[AdminController::class, 'delete_category'])->middleware(['auth', 'admin']);

route::get('edit_user/{id}',[AdminController::class, 'edit_user'])->middleware(['auth', 'admin']);

route::post('update_user/{id}',[AdminController::class, 'update_user'])->middleware(['auth', 'admin']);

route::post('/contact',[HomeController::class, 'contact']);

route::get('/all_messages',[AdminController::class, 'all_messages']);

route::get('delete_user/{id}',[AdminController::class, 'delete_user'])->middleware(['auth', 'admin']);

route::get('add_product',[AdminController::class, 'add_product'])->middleware(['auth', 'admin']);

route::post('upload_product',[AdminController::class, 'upload_product'])->middleware(['auth', 'admin']);

route::get('view_product',[AdminController::class, 'view_product'])->middleware(['auth', 'admin']);

route::get('add_cart/{id}',[HomeController::class, 'add_cart'])->middleware(['auth', 'verified']);

route::get('mycart',[HomeController::class, 'mycart'])->
middleware(['auth', 'verified']);
