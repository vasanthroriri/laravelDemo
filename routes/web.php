<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [UserController::class, 'userview']); // Add middleware if needed for authenticationdd middleware if needed for authentication
Route::get('/admin', [UserController::class, 'viewAdmin'])->name('admin.view');
Route::post('/admin/add', [UserController::class, 'addUser'])->name('admin.add');
Route::get('/admin/edit/{id}', [UserController::class, 'editUser'])->name('admin.edit');
Route::put('/admin/update/{id}', [UserController::class, 'updateUser'])->name('admin.update');
