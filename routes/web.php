<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\PenilaianController;
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
    
    Route::resource('presensi', PresensiController::class);
    // Route::get('/presensi', [PresensiController::class, 'index']);
    // Route::get('/presensi/create', [PresensiController::class, 'create']);
    // Route::post('/presensi', [PresensiController::class, 'store']);
    // Route::get('/presensi/{id}', [PresensiController::class, 'show']);
    // Route::get('/presensi/{id}/edit', [PresensiController::class, 'edit']);
    // Route::put('/presensi/{id}', [PresensiController::class, 'update']);
    // Route::delete('/presensi/{id}', [PresensiController::class, 'destroy']);
    
    // Route::resource('penilaian', PenilaianController::class);
    Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian.index');
    Route::get('/penilaian/create', [PenilaianController::class, 'create'])->name('penilaian.create');
    Route::post('/penilaian', [PenilaianController::class, 'store'])->name('penilaian.store');
    Route::get('/penilaian/show', [PenilaianController::class, 'show'])->name('penilaian.show');
    Route::get('/penilaian/{penilaian}/edit', [PenilaianController::class, 'edit'])->name('penilaian.edit');
    Route::put('/penilaian/{penilaian}', [PenilaianController::class, 'update'])->name('penilaian.update');
    Route::delete('/penilaian/{penilaian}', [PenilaianController::class, 'destroy'])->name('penilaian.destroy');

});

require __DIR__.'/auth.php';
