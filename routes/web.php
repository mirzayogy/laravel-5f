<?php

use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.default');
});

Route::resource('/dosen', DosenController::class);
