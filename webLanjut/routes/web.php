<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('v_home');
});

Route::get("/login", function (){
    return view('v_login');
});

Route::get("/v_produk", [ProdukController::class, 'index']);
Route::get("/v_keranjang", [TransaksiController::class, 'index']);

?>

