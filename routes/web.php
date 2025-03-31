<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\NewsController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\ServiceController;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;


/* SITE */
Route::get('/', function () {
    return view('site.home.index');
})->name('site.home.index');
/* noticias */
Route::get('/blog', [NewsController::class, 'index'])->name('site.news.index');
/* sobre */
Route::get('/about', [AboutController::class, 'index'])->name('site.about.index');
/* contacto */
Route::get('/contact', [ContactController::class, 'index'])->name('site.contact.index');
/* contacto */
Route::get('/service', [ServiceController::class, 'index'])->name('site.service.index');
/* product*/
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

/* Admin*/
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/news', [AdminNewsController::class, 'index'])->name('admin.news.index');
    Route::get('/contact', [AdminContactController::class, 'index'])->name('admin.contact.index');
    Route::get('/about', [AdminAboutController::class, 'index'])->name('admin.about.index');
    Route::get('/service', [AdminServiceController::class, 'index'])->name('admin.service.index');
    Route::get('/product', [AdminProductController::class, 'index'])->name('admin.product.index');
});


