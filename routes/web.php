<?php

use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.default');
});

Route::resource('/dosen', DosenController::class);

Route::get('/halaman1', function () {
    return view('halaman.halaman1');
});

Route::get('/halaman2', function () {
    return view('halaman.halaman2');
});
