<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [UserController::class, 'userview']); // Add middleware if needed for authenticationdd middleware if needed for authentication
Route::post('/addUser', [UserController::class, 'addUser']); // Add middleware if needed for authenticationdd middleware if needed for authentication
