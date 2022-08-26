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
        Route::get('register/show', [RegisterController::class, 'register'])->name('register.show');
        Route::post('register/post', [RegisterController::class, 'doRegister'])->name('register.do');
        // ============================================================================** Content Route ** ==========================================================================
        Route::get('/contacts', [ContactController::class, 'index'])->name('conacts');
        Route::post('/contacts/create', [ContactController::class, 'store'])->name('contacts.store');
        Route::get('/about-us', [ContactController::class, 'aboutUs'])->name('about_us');

        // ============================================================================** Category Route ** ==========================================================================
        Route::get('/single-category/{id}', [CategoryController::class, 'index'])->name('single_category');

        // ============================================================================** Account Route ** ==========================================================================

        Route::get('/my-account', [AccountController::class, 'myAccount'])->name('my_account');
        Route::get('/help', [AccountController::class, 'help'])->name('help');
        Route::get('/wish-list', [AccountController::class, 'favourite'])->name('wish_list');
        // ============================================================================** Account Route ** ==========================================================================

        Route::get('/product-create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');


    });
