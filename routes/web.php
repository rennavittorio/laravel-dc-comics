<?php

use App\Http\Controllers\ComicController;
use App\Models\Comic;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/comics', [ComicController::class, 'index'])->name('comic.index');

Route::get('/comics/create', [ComicController::class, 'create'])->name('comic.create');

Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comic.show');
