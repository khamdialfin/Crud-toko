<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
  <!-- Content here -->
   <h3>Toko Atk</h3>
        <form action="proses-data.php" method="post" class="row g-3" border="1">
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" name="kd_brg" placeholder="Masukan Kode Barang">
        </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Produk">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Harga Barang</label>
    <input type="number" class="form-control" name="harga" placeholder="Masukan Harga Produk">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Merk</label>
    <input type="text" class="form-control" name="merk" placeholder="Masukan Merk Produk">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">jumlah</label>
    <input type="number" class="form-control" name="jumlah" placeholder="Masukan Jumlah Produk">
  </div>
  <div class="col-12">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="daftar">Sign in</button>
  </div>
</form>
    </div>
</body>
</html>