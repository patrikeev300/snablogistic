<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\DeferredController;
use App\Http\Controllers\OptController;
use App\Http\Controllers\ContactController
;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('/personalarea', [UserController::class, 'profile'])->name('profile');
    Route::post('/personalarea/update', [UserController::class, 'updateProfile'])->name('profile.update');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/catalog', [ProductController::class, 'index'])->name('catalog.index');




Route::get('/vacancies', function () {
    return view('vacancies.index');
});

Route::get('/deferred', [DeferredController::class, 'index'])->name('deferred.index');

Route::middleware(['auth'])->group(function () {
    Route::post('/remove-from-favorites/{product}', [DeferredController::class, 'remove'])->name('removeFromFavorites');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/add-to-favorites/{product}', [DeferredController::class, 'add'])->name('addToFavorites');
});
Route::get('/basket', [BasketController::class, 'index'])->name('basket.index');
Route::get('/basket/remove/{id}', [BasketController::class, 'remove'])->name('basket.remove');
Route::post('/basket/create', [BasketController::class, 'create'])->name('basket.create');


Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');

Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/sort', [ProductController::class, 'sort'])->name('sort');
Route::get('/filter', [ProductController::class, 'filter'])->name('filter');

Route::get('/catalog/{id}', [ProductController::class, 'show'])->name('catalog.show');


Route::post('/add-to-cart/{product}', [ProductController::class, 'addToCart'])->name('addToCart');

Route::post('/send-opt-form', [OptController::class, 'sendForm'])->name('email.submit');
Route::post('/send-contact-form', [ContactController::class, 'sendForm'])->name('contact.submit');
Route::get('/kontakt', [ContactController::class, 'index']);
Route::post('/send-feedback', [ContactController::class, 'sendFeedback'])->name('feedback.submit');
