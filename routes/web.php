<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DahboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login.index');
});

// Rutas de Autenticación
Route::get('/login', [AuthController::class, 'login'])->name('login.index');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login.process');

Route::get('/register', [AuthController::class, 'register'])->name('register.index');
Route::post('/register/user', [AuthController::class, 'createUser'])->name('register.process');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [DahboardController::class, 'index'])->name('dashboard.index');

    Route::post('/users/create', [DahboardController::class, 'createUser'])->name('dashboard.users.create');
    Route::get('/users/edit/{id}', [DahboardController::class, 'editUser'])->name('dashboard.users.edit');
    Route::put('/users/update/{id}', [DahboardController::class, 'updateUser'])->name('dashboard.users.update');
    Route::delete('/users/delete/{id}', [DahboardController::class, 'deleteUser'])->name('dashboard.users.delete');

    Route::get('/users/index', [DahboardController::class, 'indexUsers'])->name('dashboard.users.index');
});

