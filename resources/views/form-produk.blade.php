<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Form Input Produk</title> 
</head> 
<body> 
    <h2>Form Input Produk</h2> 
 
    <form action="/kirim-produk" method="POST"> 
        @csrf <!-- Token keamanan wajib di setiap form POST -->
    <label>Nama Produk:</label><br> 
    <input type="text" name="nama" required><br><br> 
    <label>Harga Produk:</label><br> 
    <input type="number" name="harga" required><br><br> 
    
    <label>Kategori:</label><br> 
        <select name="kategori"> 
        <option value="Makanan">Makanan</option> 
        <option value="Minuman">Minuman</option> 
        <option value="Elektronik">Elektronik</option> 
    </select><br><br> 
    <button type="submit">Kirim</button> 
   </form> 
  </body> 
</html> 