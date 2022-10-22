<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
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

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/chi-sono', [AboutController::class, 'index'])->name('about');

Route::get('/contatti', [ContactController::class, 'index'])->name('contact');
Route::post('/contatti/invia', [ContactController::class, 'send'])->name('send');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{seourl}', [BlogController::class, 'detail'])->name('blog.detail');
