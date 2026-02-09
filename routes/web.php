<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai', function(){
    return view('pegawai');
});

Route::get('/hitung', [App\Http\Controllers\segitigaController::class, 'perkalian']);

use App\Http\Controllers\barangController;
Route::get('barang',[barangController::class, 'index']) ->name('barang.index');
Route::get('barang/create',[barangController::class, 'create']) ->name('barangs.create');
Route::post('barang',[barangController::class, 'store']) ->name('barang.store');
Route::get('barang/{id}',[barangController::class, 'show']) ->name('barang.show');
Route::get('barang/{id}/edit',[barangController::class, 'edit']) ->name('barang.edit');
Route::put('barang/{id}',[barangController::class, 'update']) ->name('barang.update');
Route::delete('barang/{id}',[barangController::class, 'destroy']) ->name('barang.destroy'); 
?>

<!-- I just want to commit -->