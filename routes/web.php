<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\AccountController;
use App\Http\Controllers\Frontend\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
    ])
    ->group(function () {
        Auth::routes();

        Route::get('/', [HomeController::class, 'index'])->name('home');
        // ============================================================================** Login Route ** ==========================================================================
        Route::get('login/show', [LoginController::class, 'login'])->name('login.show');
        Route::post('login/post', [LoginController::class, 'doLogin'])->name('login.do');
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
        // ============================================================================** Register Route ** ==========================================================================
        Route::get('register/show', [RegisterController::class, 'register'])->name('register');
        Route::post('register/post', [RegisterController::class, 'doRegister'])->name('register.do');
        // ============================================================================** Content Route ** ==========================================================================
        Route::get('/contacts', [ContactController::class, 'index'])->name('conacts');
        Route::post('/contacts/create', [ContactController::class, 'store'])->name('contacts.store');
        // ============================================================================** Category Route ** ==========================================================================
        Route::get('/single-category/{id}', [CategoryController::class, 'index'])->name('single_category');

        // ============================================================================** Account Route ** ==========================================================================

        Route::get('/my-account', [AccountController::class, 'myAccount'])->name('my_account');
        Route::get('/help', [AccountController::class, 'help'])->name('help');
        // ============================================================================** Account Route ** ==========================================================================

        Route::get('/product-create', [ProductController::class, 'create'])->name('product.create');
        Route::get('/product-store', [ProductController::class, 'store'])->name('product.store');


    });
