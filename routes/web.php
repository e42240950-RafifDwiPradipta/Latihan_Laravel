<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Tampilan Route Laravel dengan Output Menarik ✨
|--------------------------------------------------------------------------
| Dibuat oleh: Rafif Dwi Pradipta
| Tujuan: Latihan Routing di Laravel agar tampil lebih interaktif & estetik
|--------------------------------------------------------------------------
*/

// 🟢 ROUTE GET
Route::get('/', function () {
    return '
    <div style="
        font-family: Arial, sans-serif; 
        background: linear-gradient(135deg, #00b09b, #96c93d);
        color: white; 
        padding: 60px; 
        text-align: center; 
        border-radius: 20px;
        margin: 50px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    ">
        <h1>🌟 Selamat Datang di Aplikasi Laravel!</h1>
        <p style="font-size:18px;">Belajar Routing dengan tampilan yang menarik 🚀</p>
        <p>Coba buka <a href="/user" style="color:#fff; text-decoration:underline;">/user</a> atau <a href="/form-produk" style="color:#fff; text-decoration:underline;">/form-produk</a></p>
    </div>';
});

Route::get('/user', function () {
    return '
    <div style="
        font-family: Poppins, sans-serif; 
        background:#e3f2fd;
        color: #0d47a1;
        padding: 50px;
        text-align:center;
        margin:50px;
        border-radius:15px;
        box-shadow:0 5px 15px rgba(0,0,0,0.2);
    ">
        <h2>👤 Hello, User!</h2>
        <p>Ini adalah contoh route <b>GET</b> di Laravel.</p>
    </div>';
});


// 🟦 ROUTE GET (Form Input)
Route::get('/form-produk', function () {
    return '
    <div style="font-family: Arial; text-align:center; margin-top:50px;">
        <h2>🛍️ Form Input Produk</h2>
        <form action="/kirim-produk" method="POST" style="display:inline-block; text-align:left; padding:30px; border:1px solid #ddd; border-radius:10px; background:#f9f9f9;">
            '.csrf_field().'
            <label>Nama Produk:</label><br>
            <input type="text" name="nama" required style="width:100%; padding:8px; margin-bottom:10px;"><br>
            
            <label>Harga Produk:</label><br>
            <input type="number" name="harga" required style="width:100%; padding:8px; margin-bottom:10px;"><br>
            
            <label>Kategori:</label><br>
            <select name="kategori" style="width:100%; padding:8px; margin-bottom:10px;">
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Elektronik">Elektronik</option>
            </select><br><br>
            
            <button type="submit" style="background:#007bff; color:white; padding:10px 20px; border:none; border-radius:5px; cursor:pointer;">Kirim Produk</button>
        </form>
    </div>';
});


// 🟦 ROUTE POST (Hasil Form)
Route::post('/kirim-produk', function (Request $request) {
    $nama = $request->input('nama');
    $harga = $request->input('harga');
    $kategori = $request->input('kategori');

    return "
    <div style='
        font-family: Arial;
        background: #f0f8ff;
        color: #333;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        width: 60%;
        margin: 50px auto;
        text-align: center;
    '>
        <h2 style='color:#007bff;'>Produk Berhasil Dikirim 🎉</h2>
        <p><b>Nama Produk:</b> $nama</p>
        <p><b>Harga:</b> Rp".number_format($harga,0,',','.')."</p>
        <p><b>Kategori:</b> $kategori</p>
        <a href='/form-produk' style='color:#007bff; text-decoration:none;'>← Kembali ke Form</a>
    </div>";
});


// 🟨 ROUTE GET (Form Edit Produk)
Route::get('/produk/edit', function () {
    return '
    <div style="font-family: Arial; text-align:center; margin-top:50px;">
        <h2>✏️ Edit Data Produk</h2>
        <form action="/produk/update" method="POST" style="display:inline-block; text-align:left; padding:30px; border:1px solid #ddd; border-radius:10px; background:#f1f8e9;">
            ' . csrf_field() . method_field('PUT') . '
            <label>Nama Produk:</label><br>
            <input type="text" name="nama" value="Laptop Lama" style="width:100%; padding:8px; margin-bottom:10px;"><br>

            <label>Harga Produk:</label><br>
            <input type="number" name="harga" value="5000000" style="width:100%; padding:8px; margin-bottom:10px;"><br>

            <label>Kategori:</label><br>
            <select name="kategori" style="width:100%; padding:8px; margin-bottom:10px;">
                <option value=\'Elektronik\'>Elektronik</option>
                <option value=\'Makanan\'>Makanan</option>
                <option value=\'Minuman\'>Minuman</option>
            </select><br><br>

            <button type="submit" style="background:#4caf50; color:white; padding:10px 20px; border:none; border-radius:5px; cursor:pointer;">Perbarui</button>
        </form>
    </div>';
});


// 🟨 ROUTE PUT (Hasil Edit)
Route::put('/produk/update', function (Request $request) {
    $nama = $request->input('nama');
    $harga = $request->input('harga');
    $kategori = $request->input('kategori');

    return "
    <div style='
        font-family: Poppins, sans-serif;
        background: #e8f5e9;
        padding: 30px;
        border-radius: 12px;
        width: 50%;
        margin: 50px auto;
        text-align: center;
        border: 2px solid #4caf50;
    '>
        <h2 style='color:#388e3c;'>Data Produk Diperbarui ✅</h2>
        <p><b>Nama Baru:</b> $nama</p>
        <p><b>Harga Baru:</b> Rp".number_format($harga,0,',','.')."</p>
        <p><b>Kategori:</b> $kategori</p>
        <a href='/produk/edit' style='color:#4caf50; text-decoration:none;'>← Kembali ke Edit</a>
    </div>";
});


// 🟧 ROUTE GET (Form Update Harga)
Route::get('/produk/edit-harga', function () {
    return '
    <div style="font-family: Arial; text-align:center; margin-top:50px;">
        <h2>💸 Ubah Harga Produk</h2>
        <form action="/produk/update-harga" method="POST" style="display:inline-block; text-align:left; padding:30px; border:1px solid #ddd; border-radius:10px; background:#fff8e1;">
            ' . csrf_field() . method_field('PATCH') . '
            <p>Nama Produk: <b>Laptop ASUS</b></p>
            <p>Kategori: <b>Elektronik</b></p>
            <p>Harga Saat Ini: <b>Rp5.000.000</b></p>
            <label>Harga Baru:</label><br>
            <input type="number" name="harga" value="5000000" required style="width:100%; padding:8px; margin-bottom:10px;"><br>
            <button type="submit" style="background:#ffb300; color:#fff; padding:10px 20px; border:none; border-radius:5px; cursor:pointer;">Perbarui Harga</button>
        </form>
    </div>';
});


// 🟧 ROUTE PATCH (Hasil Update Harga)
Route::patch('/produk/update-harga', function (Request $request) {
    $harga = $request->input('harga');

    return "
    <div style='
        font-family: Arial;
        background: #fff8e1;
        border: 2px solid #ffb300;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        width: 50%;
        margin: 50px auto;
        color:#795548;
    '>
        <h2>Harga Berhasil Diperbarui 💰</h2>
        <p>Harga baru produk ini adalah <b>Rp".number_format($harga,0,',','.')."</b></p>
        <a href='/produk/edit-harga' style='color:#ff9800; text-decoration:none;'>← Kembali ke Form</a>
    </div>";
});