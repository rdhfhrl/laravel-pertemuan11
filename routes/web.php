<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| Routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/golongan', [App\Http\Controllers\GolonganController::class, 'index'])->name('golongan.index');

Route::get('/golongan/create', [App\Http\Controllers\GolonganController::class, 'create'])->name('golongan.create');

Route::post('/golongan', [App\Http\Controllers\GolonganController::class, 'store'])->name('golongan.store');

Route::get('/golongan/{id}/edit', [App\Http\Controllers\GolonganController::class, 'edit'])->name('golongan.edit');

Route::patch('/golongan/{id}', [App\Http\Controllers\GolonganController::class, 'update'])->name('golongan.update');

Route::delete('/golongan/{id}', [App\Http\Controllers\GolonganController::class, 'destroy'])->name('golongan.destroy');

Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index');

Route::get('/users/create', [App\Http\Controllers\UsersController::class, 'create'])->name('users.create');

Route::post('/users', [App\Http\Controllers\UsersController::class, 'store'])->name('users.store');

Route::get('/users/{id}/edit', [App\Http\Controllers\UsersController::class, 'edit'])->name('users.edit');

Route::patch('/users/{id}', [App\Http\Controllers\UsersController::class, 'update'])->name('users.update');

Route::delete('/users/{id}', [App\Http\Controllers\UsersController::class, 'destroy'])->name('users.destroy');

Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('pelanggan.index');

Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create'])->name('pelanggan.create');

Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store'])->name('pelanggan.store');

Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit'])->name('pelanggan.edit');

Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update'])->name('pelanggan.update');

Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy'])->name('pelanggan.destroy');
