<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use  App\Http\Controllers\Admin\AdminLoginController;
use  App\Http\Controllers\Admin\DashboardController;
use  App\Http\Controllers\Admin\UserController;
use  App\Http\Controllers\Admin\CategoryController;
use  App\Http\Controllers\Admin\ProductController;
Auth::routes(['except' => 'register']);
// Route::name('admin.')->prefix('admin')->group(function () {
Route::prefix('admin')->group(function () {
    Route::get('login-show', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'doLogin'])->name('admin.do.login');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.home');
        //Users Route
        Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
        Route::post('/users/store', [UserController::class, 'store'])->name('admin.users.store');
        Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
        Route::post('/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update');
        Route::delete   ('/users/delete/{id}', [UserController::class, 'delete'])->name('admin.users.delete');
    //  Category Route
    //  Route::resource('admin.categories', CategoryController::class);
     Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
     Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
     Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
     Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
     Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
     Route::delete('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('admin.categories.delete');



     //Products Route
     Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');

    });
});
