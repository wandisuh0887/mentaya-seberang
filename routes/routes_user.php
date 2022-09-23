<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ActivityController;
use App\Http\Controllers\User\ServiceController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\PemberdayaanController;
use App\Http\Controllers\User\KelembagaanController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::prefix('kelurahan')->group( function() {
    Route::get('/profil', [ProfileController::class, 'profile'])->name('kelurahan.profileuser');
    Route::get('/visi-misi', [ProfileController::class, 'visi_misi'])->name('kelurahan.visimisi');
    Route::get('/struktur', [ProfileController::class, 'struktur'])->name('kelurahan.struktur');
    Route::get('/sarana-prasarana', [ProfileController::class, 'sarpras'])->name('kelurahan.sarpras');
});
Route::get('/kegiatan', [ActivityController::class,'index'])->name('activity');
Route::get('/kegiatan/detail/{slug}', [ActivityController::class,'detail'])->name('activity.detail');
Route::get('/layanan/page/{slug}', [ServiceController::class,'detail'])->name('service.detail');
Route::get('/pemberdayaan/page/{slug}', [PemberdayaanController::class,'detail'])->name('pemberdayaan.detail');
Route::get('/kelembagaan/page/{slug}', [KelembagaanController::class,'detail'])->name('kelembagaan.detail');
