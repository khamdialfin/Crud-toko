<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Silahkan Masukan Produk Atk</h3>
    <form action="proses-data.php" method="POST">
        <fieldset>
            <input type="text"name="kd_brg" placeholder="Masukan Kode Barang">
            <input type="text"name="nama" placeholder="Masukan Nama">
            <input type="number"name="harga" placeholder="Masukan Harga">
            <input type="text"name="merk" placeholder="Masukan Merk Produk">
            <input type="number"name="jumlah" placeholder="Masukan Jumlah Produk">
            <button type="submit" name="daftar">Simpan</button>
        </fieldset>
    </form>
</body>
</html>