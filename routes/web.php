<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\RsvController;
use App\Http\Controllers\WishesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/2112/wish', function () {
    return view('content.datawishes');
});

Route::get('/admin/2112/', function () {
    return view('content.datareservasi');
});

Route::get('/admin/2112/inputwish', function () {
    return view('content.inputwish');
});

Route::get('/admin/2112/datawish', [WishesController::class, 'index'])->name('wish.index');
Route::get('/admin/2112/inputwish', [WishesController::class, 'store'])->name('wish.input');
Route::post('/admin/2112/inputwish', [WishesController::class, 'tambah'])->name('wish.tambah');
Route::delete('/rsv/{id}', [WishesController::class, 'destroy'])->name('wish.destroy');

Route::get('/admin/2112/datarsv', [RsvController::class, 'index'])->name('rsv.index');
Route::get('/admin/2112/inputrsv', [RsvController::class, 'store'])->name('rsv.input');
Route::post('/admin/2112/inputrsv', [RsvController::class, 'tambah'])->name('rsv.tambah');
Route::delete('/rsv/{id}', [RsvController::class, 'destroy'])->name('rsv.destroy');

Route::get('/admin/2112/datatamu', [TamuController::class, 'index'])->name('tamu.index');
Route::get('/admin/2112/inputtamu', [TamuController::class, 'store'])->name('tamu.input');
Route::post('/admin/2112/inputtamu', [TamuController::class, 'tambah'])->name('tamu.tambah');
Route::get('/admin/tamu/{id}', [TamuController::class, 'show'])->name('tamu.show');
Route::post('/admin/tamu/{id}', [TamuController::class, 'update'])->name('tamu.update');
Route::delete('/tamu/{id}', [TamuController::class, 'destroy'])->name('tamu.destroy');

