<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GaleriController;

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');


Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::get('/pemesanan/{slug}', [PemesananController::class, 'show'])->name('menu.show');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/toko/pengiriman', [PemesananController::class, 'kirim'])->name('menu.kirim');
Route::get('/pemesanan/{slug}', [PemesananController::class, 'show'])->name('menu.show');
Route::post('/pemesanan/kirim', [PemesananController::class, 'kirim'])->name('pemesanan.kirim');
Route::get('/toko/pengiriman', [PemesananController::class, 'pengiriman'])->name('pengiriman');
Route::get('/toko', [PemesananController::class, 'redirectToPemesanan'])->name('toko.redirect');
Route::match(['get', 'post'], '/toko/struk', [PemesananController::class, 'showStruk'])->name('struk');


Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');





// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.index');
    Route::get('/articles', [App\Http\Controllers\AdminArticleController::class, 'index'])->name('admin.articles.index');
    Route::get('/articles/create', [App\Http\Controllers\AdminArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [App\Http\Controllers\AdminArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles/{id}/edit', [App\Http\Controllers\AdminArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{id}', [App\Http\Controllers\AdminArticleController::class, 'update'])->name('admin.articles.update');
    Route::delete('/articles/{id}', [App\Http\Controllers\AdminArticleController::class, 'destroy'])->name('articles.destroy');

    //Route::get('/ajax/categories/search', [AdminArticleController::class, 'ajaxSearch']);
});

Route::get('/login', [App\Http\Controllers\AuthController::class, 'Login'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'LoginPost'])->name('login.post');
Route::get('/register', [App\Http\Controllers\AuthController::class, 'Register'])->name('register');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'RegisterPost'])->name('register.post');
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'Logout'])->name('logout');
