<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
      form {
        background: #ffffffcc;
        padding: 30px 40px;
        border-radius: 12px;
        max-width: 600px;
        width: 100%;
        box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        backdrop-filter: blur(10px);
        margin-bottom: 40px;
        }
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            padding: 40px 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
  <!-- Content here -->
        <form action="proses-data.php" method="post" class="row g-3" border="1">
          <h2>Input Data</h2>
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
    <button type="submit" class="btn btn-primary" name="daftar" style="background-color:  #198754;">Tambah Data</button>
    <button type="submit" class="btn btn-primary"><a href="index.php"></a>Kembali</button>
  </div>
</form>
    </div>
</body>
</html>