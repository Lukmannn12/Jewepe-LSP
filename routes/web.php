<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [ArtikelController::class, 'artikel']);

Route::get('/admin', [ArtikelController::class, 'indexcl'])->name('admin');
Route::get('/tambahartikel', [ArtikelController::class, 'tambahArtikel'])->name('tambahartikel');
Route::post('/simpanartikel', [ArtikelController::class, 'simpanArtikel'])->name('simpanartikel');
Route::get('/deleteartikel/{id_artikel}', [ArtikelController::class, 'delete'])->name('deleteartikel');
Route::post('/updateartikel/{id_artikel}', [ArtikelController::class, 'updateArtikel'])->name('updateartikel');
Route::get('/edit/{id}', [ArtikelController::class, 'tampilkanartikel'])->name('edit');
Route::get('/detail/{id}', [ArtikelController::class, 'detail'])->name('detail');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

