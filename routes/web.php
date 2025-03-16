<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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
Route::get('/nossos-planos', function () {
    return view('site.price');
});

Route::get('/home', [SiteController::class, 'index'])->name('site.index');
Route::get('/cadastro-do-marketing', [SiteController::class, 'create'])->name('site.create');
