<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;

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


Route::get('/admin/2112/datatamu', [TamuController::class, 'index'])->name('tamu.index');
Route::get('/admin/2112/inputtamu', [TamuController::class, 'store'])->name('tamu.input');
Route::post('/admin/2112/inputtamu', [TamuController::class, 'tambah'])->name('tamu.tambah');
Route::get('/admin/tamu/{id}', [TamuController::class, 'show'])->name('tamu.show');
Route::post('/admin/tamu/{id}', [TamuController::class, 'update'])->name('tamu.update');
Route::delete('/tamu/{id}', [TamuController::class, 'destroy'])->name('tamu.destroy');

