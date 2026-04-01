<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
Route::get('/', function () {
    return view('v_home');
});

Route::get("/produk", [ProdukController::class, 'index']);
Route::get("/keranjang", [TransaksiController::class, 'index']);
?>

