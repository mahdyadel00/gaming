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
use App\Http\Controllers\Frontend\FavouriteController;
use App\Http\Controllers\Frontend\EmailSubscriptionController;

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
        Route::get('logout', [LoginController::class, 'logout'])->name('logout.front');
        // ============================================================================** Register Route ** ==========================================================================
        Route::get('register/show', [RegisterController::class, 'register'])->name('register.show');
        Route::post('register/post', [RegisterController::class, 'doRegister'])->name('register.do');
        // ============================================================================** Content Route ** ==========================================================================
        Route::get('/contacts', [ContactController::class, 'index'])->name('conacts');
        Route::post('/contacts/create', [ContactController::class, 'store'])->name('contacts.store');
        Route::get('/about-us', [ContactController::class, 'aboutUs'])->name('about_us');

        // ============================================================================** Category Route ** ==========================================================================
        Route::get('/categories', [CategoryController::class, 'category'])->name('categories.category');
        Route::get('/single-category/{id}', [CategoryController::class, 'index'])->name('single_category');
        Route::get('/category/search', [CategoryController::class, 'search'])->name('search_category');

        // ============================================================================** Email Subscribtion Route ** ==========================================================================
        Route::post('/email-subscription', [EmailSubscriptionController::class, 'store'])->name('email.subscribtion');

        // ============================================================================** Account Route ** ==========================================================================

        Route::get('/my-account', [AccountController::class, 'myAccount'])->name('my_account');
        Route::get('/profile/edit', [AccountController::class, 'edit'])->name('profile.edit');
        Route::post('/profile/update/{id}', [AccountController::class, 'update'])->name('profile.update');
        Route::get('/help', [AccountController::class, 'help'])->name('help');
        Route::get('/wish-list', [AccountController::class, 'favourite'])->name('wish_list');
        Route::get('/promoted-add', [AccountController::class, 'promoted'])->name('promoted_add');
        Route::get('/member-ship', [AccountController::class, 'memberShip'])->name('member_ship');
        // ============================================================================** Product Route ** ==========================================================================

        Route::get('/product-create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product-single/{id}', [ProductController::class, 'single'])->name('product.single');
        Route::delete('/product/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
        Route::get('/products', [ProductController::class, 'index'])->name('product.index');
        Route::get('/products/create-image', [ProductController::class, 'storeImage'])->name('products.store_image');
        Route::get('/products/delete-image', [ProductController::class, 'deleteImage'])->name('products.delete_image');
        // ============================================================================** Favourite Route ** ==========================================================================

        Route::post('favorite/{product}/create', [FavouriteController::class, 'create'])->name('favorite.store');
        Route::delete('favorite/{product}', [FavouriteController::class, 'destroy'])->name('favorite.destroy');




    });
