<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello World"; 
});

Route::get('/user', function () { 
    return "Hello User"; 
}); 

// routes/web.php 
Route::get('/form-produk', function () { 
    return view('form-produk'); 
});

// routes/web.php 
 use Illuminate\Http\Request; 
 
Route::post('/kirim-produk', function (Request $request) { 
    $nama = $request->input('nama'); 
    $harga = $request->input('harga'); 
    $kategori = $request->input('kategori'); 
 
    return "Produk bernama <b>$nama</b> dengan harga <b>Rp$harga</b> 
termasuk kategori <b>$kategori</b> berhasil dikirim!"; 
});