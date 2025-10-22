<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Edit Data Produk</title> 
</head> 
<body> 
    <h2>Form Edit Produk</h2> 
 
    <form action="/produk/update" method="POST"> 
        @csrf 
        @method('PUT') 
 
        <label>Nama Produk:</label><br> 
        <input type="text" name="nama" value="Laptop Lama"><br><br> 
 
<label>Harga Produk:</label><br> 
<input type="number" name="harga" value="5000000"><br><br> 
<label>Kategori:</label><br> 
<select name="kategori"> 
<option value="Elektronik">Elektronik</option> 
<option value="Makanan">Makanan</option> 
<option value="Minuman">Minuman</option> 
</select><br><br> 
<button type="submit">Perbarui Data</button> 
</form> 
</body> 
</html>