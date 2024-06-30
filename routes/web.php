<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



use App\Http\Controllers\AdminController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Area_palkirController;
use App\Http\Controllers\KampusController;

Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/jenis/show', [JenisController::class, 'show'])->name('jenis.show');
Route::get('/kendaraan/show', [KendaraanController::class, 'show'])->name('kendaraan.show');
Route::get('/transaksi/show', [TransaksiController::class, 'show'])->name('transaksi.show');
Route::get('/area_kampus/show', [Area_palkirController::class, 'show'])->name('area_palkir.show');
Route::get('/kampus/show', [KampusController::class, 'show'])->name('kampus.show');


Route::get('/jenis/create', [JenisController::class, 'create'])->name('jenis.create');
Route::post('/jenis/store', [JenisController::class, 'store'])->name('jenis.store');

Route::get('/kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
Route::post('/kendaraan/store', [KendaraanController::class, 'store'])->name('kendaraan.store');

Route::get('/area_palkir/create', [Area_palkirController::class, 'create'])->name('area_palkir.create');
Route::post('/area_palkir/store', [Area_palkirController::class, 'store'])->name('area_palkir.store');

Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');

Route::get('/kampus/create', [KampusController::class, 'create'])->name('kampus.create');
Route::post('/kampus/store', [KampusController::class, 'store'])->name('kampus.store');

Route::get('/jenis/detail/{id}', [JenisController::class, 'detail'])->name('jenis.detail');
Route::get('/jenis/edit/{id}', [JenisController::class, 'edit'])->name('jenis.edit');
Route::put('/jenis/update/{id}', [JenisController::class, 'update'])->name('jenis.update');
Route::delete('/jenis/delete/{id}', [JenisController::class, 'destroy'])->name('jenis.destroy');

Route::get('/kendaraan/detail/{id}', [KendaraanController::class, 'detail'])->name('kendaraan.detail');
Route::get('/kendaraan/edit/{id}', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::put('/kendaraan/update/{id}', [KendaraanController::class, 'update'])->name('kendaraan.update');
Route::delete('/kendaraan/delete/{id}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');

Route::get('/area_palkir/detail/{id}', [Area_palkirController::class, 'detail'])->name('area_palkir.detail');
Route::get('/area_palkir/edit/{id}', [Area_palkirController::class, 'edit'])->name('area_palkir.edit');
Route::put('/area_palkir/update/{id}', [Area_palkirController::class, 'update'])->name('area_palkir.update');
Route::delete('/area_palkir/delete/{id}', [Area_palkirController::class, 'destroy'])->name('area_palkir.destroy');

Route::get('/kampus/detail/{id}', [KampusController::class, 'detail'])->name('kampus.detail');
Route::get('/kampus/edit/{id}', [KampusController::class, 'edit'])->name('kampus.edit');
Route::put('/kampus/update/{id}', [KampusController::class, 'update'])->name('kampus.update');
Route::delete('/kampus/delete/{id}', [KampusController::class, 'destroy'])->name('kampus.destroy');

Route::get('/transaksi/detail/{id}', [TransaksiController::class, 'detail'])->name('transaksi.detail');
Route::get('/transaksi/edit/{id}', [TransaksiController::class, 'edit'])->name('transaksi.edit');
Route::put('/transaksi/update/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
Route::delete('/transaksi/delete/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
