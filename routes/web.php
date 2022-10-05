<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/articles/create', [\App\Http\Controllers\ArticlesController::class, 'create'])->middleware(['auth'])->name('articles.create');
Route::post('/articles', [\App\Http\Controllers\ArticlesController::class, 'store'])->middleware(['auth'])->name('articles.store');
Route::get('/', [\App\Http\Controllers\ArticlesController::class, 'show'])->name('welcome');

Route::post('captcha-validation', [\App\Http\Controllers\CommentsController::class, 'capthcaFormValidate']);
Route::get('reload-captcha', [\App\Http\Controllers\CommentsController::class, 'reloadCaptcha']);

require __DIR__.'/auth.php';
