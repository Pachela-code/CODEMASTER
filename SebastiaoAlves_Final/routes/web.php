<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PressController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SiteInformationController;
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

Route::get('/', [PublicController::class, 'home'])->name('public.home');
Route::get('/autor', [PublicController::class, 'autor'])->name('public.autor');
Route::get('/livros/{book}', [PublicController::class, 'livros'])->name('public.livros');
Route::get('/imprensa', [PublicController::class, 'imprensa'])->name('public.imprensa');
Route::get('/contactos', [PublicController::class, 'contactos'])->name('public.contactos');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Banner routes
    Route::get('/banners', [BannerController::class, 'index'])->name('banners.index');
    Route::get('/banners/create', [BannerController::class, 'create'])->name('banners.create');
    Route::get('/banners/edit/{banner}', [BannerController::class, 'edit'])->name('banners.edit');

    Route::post('/banners/store', [BannerController::class, 'store'])->name('banners.store');
    Route::put('/banners/update/{banner}', [BannerController::class, 'update'])->name('banners.update');
    Route::delete('/banners/delete/{banner}', [BannerController::class, 'destroy'])->name('banners.destroy');

    //Site Information
    Route::get('/site-information', [SiteInformationController::class, 'edit'])->name('site-info.edit');
    Route::put('/site-information', [SiteInformationController::class, 'update'])->name('site-info.update');

    //Books
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
    Route::get('/books/edit/{book}', [BookController::class, 'edit'])->name('books.edit');

    Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
    Route::put('/books/update/{book}', [BookController::class, 'update'])->name('books.update');
    Route::delete('/books/delete/{book}', [BookController::class, 'destroy'])->name('books.destroy');

    //Presses 
    Route::get('/press', [PressController::class, 'index'])->name('press.index');
    Route::get('/press/create', [PressController::class, 'create'])->name('press.create');
    Route::get('/press/edit/{press}', [PressController::class, 'edit'])->name('press.edit');

    Route::post('/press/store', [PressController::class, 'store'])->name('press.store');
    Route::put('/press/update/{press}', [PressController::class, 'update'])->name('press.update');
    Route::delete('/press/delete/{press}', [PressController::class, 'destroy'])->name('press.destroy');
});

require __DIR__ . '/auth.php';
