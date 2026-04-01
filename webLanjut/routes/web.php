<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProdukController;
use app\Http\Controllers\TransaksiController;
Route::get('/', function () {
    return view('v_home');
});

Route::get("/produk", [ProdukController::class, 'index']);
Route::get("/keranjang", [TransaksiController::class, 'index']);
?>

