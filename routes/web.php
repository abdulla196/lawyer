<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/')->group(function () {
    Route::get('', [\App\Http\Controllers\Front\FrontController::class, 'index'])->name('home');
    Route::get('about', [\App\Http\Controllers\Front\FrontController::class, 'AboutUS'])->name('about');
    Route::get('contact-us', [\App\Http\Controllers\Front\FrontController::class, 'ContactUs'])->name('contactUs');
    Route::post('contact', [\App\Http\Controllers\Front\FrontController::class, 'StoreContact'])->name('StoreContact');
    Route::get('services', [\App\Http\Controllers\Front\FrontController::class, 'Services'])->name('services');
    Route::get('services/{url}', [\App\Http\Controllers\Front\FrontController::class, 'ServicesDetails'])->name('service.details');
    Route::prefix('blogs')->group(function () {
        Route::get('/our-latest-news', [\App\Http\Controllers\Front\FrontController::class, 'Blogs'])->name('blogs');
        Route::get('/{bolg}', [\App\Http\Controllers\Front\FrontController::class, 'BlogDetails'])->name('blog.details');
    });
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
    Route::get('/achievements', [\App\Http\Controllers\Admin\AdminController::class, 'Achievements'])->name('achievements.index');
    Route::get('/messages', [\App\Http\Controllers\Admin\AdminController::class, 'Messages'])->name('messages');
    Route::get('/messages/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'ChangeStatus'])->name('message.contacted');
    Route::get('/profile', [\App\Http\Controllers\Admin\AdminController::class, 'Profile'])->name('profile');
    Route::prefix('/services')->group(function () {
        Route::get('', [\App\Http\Controllers\Admin\ServicesController::class, 'index'])->name('services.index');
        Route::get('/create', [\App\Http\Controllers\Admin\ServicesController::class, 'create'])->name('services.create');
        Route::post('/store', [\App\Http\Controllers\Admin\ServicesController::class, 'store'])->name('services.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\ServicesController::class, 'edit'])->name('services.edit');
        Route::put('update/{id}', [\App\Http\Controllers\Admin\ServicesController::class, 'update'])->name('services.update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ServicesController::class, 'destroy'])->name('services.delete');
    });
    Route::prefix('/settings')->group(function () {
        Route::get('', [\App\Http\Controllers\Admin\ServicesController::class, 'index'])->name('settings.index');
        Route::get('/create', [\App\Http\Controllers\Admin\ServicesController::class, 'create'])->name('settings.create');
        Route::post('/store', [\App\Http\Controllers\Admin\ServicesController::class, 'store'])->name('settings.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\ServicesController::class, 'edit'])->name('settings.edit');
        Route::put('update/{id}', [\App\Http\Controllers\Admin\ServicesController::class, 'update'])->name('settings.update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ServicesController::class, 'destroy'])->name('settings.delete');
    });
    Route::prefix('/blogs')->group(function () {
        Route::get('', [\App\Http\Controllers\Admin\BlogsController::class, 'index'])->name('blogs.index');
        Route::get('/create', [\App\Http\Controllers\Admin\BlogsController::class, 'create'])->name('blogs.create');
        Route::post('/store', [\App\Http\Controllers\Admin\BlogsController::class, 'store'])->name('blogs.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\BlogsController::class, 'edit'])->name('blogs.edit');
        Route::put('update/{id}', [\App\Http\Controllers\Admin\BlogsController::class, 'update'])->name('blogs.update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\BlogsController::class, 'destroy'])->name('blogs.delete');
    });
    Route::prefix('/faq')->group(function () {
        Route::get('', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('faq.index');
        Route::get('/create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('faq.create');
        Route::post('/store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('faq.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('faq.edit');
        Route::put('update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('faq.update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('faq.delete');
    });
});