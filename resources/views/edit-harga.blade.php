<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Edit Harga Produk</title> 
</head> 
<body> 
    <h2>Form Ubah Harga Produk</h2> 
 
    <p>Nama Produk: <b>Laptop ASUS</b></p> 
    <p>Kategori: <b>Elektronik</b></p>
    <p>Harga Saat Ini: <b>Rp5.000.000</b></p> 
<form action="/produk/update-harga" method="POST"> 
@csrf 
@method('PATCH') 
<label>Harga Baru:</label><br> 
<input type="number" name="harga" value="5000000" required><br><br> 
<button type="submit">Perbarui Harga</button> 
</form> 
</body> 
</html> 