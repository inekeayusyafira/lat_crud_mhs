<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return redirect('/mahasiswa');
});

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/test-view', function () {
    return view('mahasiswa.index');
});
