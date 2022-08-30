<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use  App\Http\Controllers\Admin\AdminLoginController;
use  App\Http\Controllers\Admin\DashboardController;
use  App\Http\Controllers\Admin\UserController;
use  App\Http\Controllers\Admin\CategoryController;
use  App\Http\Controllers\Admin\ProductController;
use  App\Http\Controllers\Admin\ContactController;
use  App\Http\Controllers\Admin\BannerController;
use  App\Http\Controllers\Admin\SliderController;
use  App\Http\Controllers\Admin\SubscriptionsController;
use  App\Http\Controllers\Admin\SettingsController;


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
        Route::get('logout', [UserController::class, 'logout'])->name('logout');

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


     //email_subscriptions Route
     Route::get('/email_subscriptions', [SubscriptionsController::class, 'index'])->name('admin.subscriptions.index');

     //Contacts Route
     Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');

     //Banners Route
     Route::get('/banners', [BannerController::class, 'index'])->name('admin.banners.index');
     Route::get('/banners/create', [BannerController::class, 'create'])->name('admin.banners.create');
     Route::post('/banners/store', [BannerController::class, 'store'])->name('admin.banners.store');
     Route::get('/banners/edit/{id}', [BannerController::class, 'edit'])->name('admin.banners.edit');
     Route::post('/banners/update/{id}', [BannerController::class, 'update'])->name('admin.banners.update');
     Route::delete('/banners/delete/{id}', [BannerController::class, 'delete'])->name('admin.banners.delete');

     
     //Banners Route
     Route::get('/sliders', [SliderController::class, 'index'])->name('admin.sliders.index');
     Route::get('/sliders/create', [SliderController::class, 'create'])->name('admin.sliders.create');
     Route::post('/sliders/store', [SliderController::class, 'store'])->name('admin.sliders.store');
     Route::get('/sliders/edit/{id}', [SliderController::class, 'edit'])->name('admin.sliders.edit');
     Route::post('/sliders/update/{id}', [SliderController::class, 'update'])->name('admin.sliders.update');
     Route::delete('/sliders/delete/{id}', [SliderController::class, 'delete'])->name('admin.sliders.delete');



     //Settings Route
     Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings.index');
     Route::get('/settings/create', [SettingsController::class, 'create'])->name('admin.settings.create');
     Route::post('/settings/store', [SettingsController::class, 'store'])->name('admin.settings.store');
     Route::get('/settings/edit/{id}', [SettingsController::class, 'edit'])->name('admin.settings.edit');
     Route::post('/settings/update/{id}', [SettingsController::class, 'update'])->name('admin.settings.update');
     Route::delete('/settings/delete/{id}', [SettingsController::class, 'delete'])->name('admin.settings.delete');

    });
});
