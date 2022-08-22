<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use  App\Http\Controllers\Admin\AdminLoginController;
use  App\Http\Controllers\Admin\DashboardController;
use  App\Http\Controllers\Admin\UserController;


Auth::routes(['except' => 'register']);

// Route::name('admin.')->prefix('admin')->group(function () {
Route::prefix('admin')->group(function () {

    Route::get('login-show', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'doLogin'])->name('admin.do.login');

    Route::group(['middleware' => ['auth:admin']], function () {
        // dd(0);
        Route::get('/', [DashboardController::class, 'index'])->name('admin.home');

        //Users Route
        Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
        Route::get('/users/create', [UserController::class, 'index'])->name('admin.users.create');
        Route::get('/users/edit', [UserController::class, 'edit'])->name('admin.users.edit');
        Route::post('/users/delete', [UserController::class, 'delete'])->name('admin.users.delete');
    });
});
