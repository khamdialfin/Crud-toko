<?php include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h3>Produk Yang Sudah Di inputkan</h3>
    </header>
    <nav>
        <a href="form-data.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Merk</th>
                <th>Jumlah</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql="select * from data_barang";
            $query=mysqli_query($db,$sql);
            ?>
           <?php while($data = mysqli_fetch_array($query)) : ?>
        <tr>
            <td><?= $data['kd_brg'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['harga'] ?></td>
            <td><?= $data['merk'] ?></td>
            <td><?= $data['jumlah'] ?></td>
            <td>
                <a href="form-edit.php?kd_brg=<?= $data['kd_brg'] ?>">Edit |</a> 
                <a href="hapus.php?kd_brg=<?= $data['kd_brg'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>        
        </tbody>
    </table>
    <p>total= <?= mysqli_num_rows($query) ?></p>
</body>
</html>