<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.default');
});

Route::resource('/dosen', DosenController::class);
Route::resource('/mahasiswa', MahasiswaController::class);

Route::get('/halaman1', function () {
    return view('halaman.halaman1');
});

Route::get('/halaman2', function () {
    return view('halaman.halaman2');
});
