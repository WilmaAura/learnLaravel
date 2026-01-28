<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai', function(){
    return view('pegawai');
});

Route::get('/hitung', [App\Http\Controllers\segitigaController::class, 'perkalian']);
