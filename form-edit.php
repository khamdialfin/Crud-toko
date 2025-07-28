<?php
include("config.php");

if (!isset($_GET['kd_brg'])) {
    header('Location: index.php');
    exit;
}

$kode = $_GET['kd_brg'];
$sql = "SELECT * FROM data_barang WHERE kd_brg = '$kode'";
$query = mysqli_query($db, $sql);


if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}


$data_barang = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Barang</title>
</head>
<body>
    <h2>Edit Data Barang</h2>
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <p>
                Kode Barang:
                <input type="text" name="kd_brg" value="<?php echo $data_barang['kd_brg']; ?>">
            </p>
            <p>
                Nama:
                <input type="text" name="nama" value="<?php echo $data_barang['nama']; ?>">
            </p>
            <p>
                Harga:
                <input type="number" name="harga" value="<?php echo $data_barang['harga']; ?>">
            </p>
            <p>
                Merk:
                <input type="text" name="merk" value="<?php echo $data_barang['merk']; ?>">
            </p>
            <p>
                Jumlah:
                <input type="number" name="jumlah" value="<?php echo $data_barang['jumlah']; ?>">
            </p>
            <p>
                <input type="submit" name="simpan" value="Simpan Perubahan">
            </p>
        </fieldset>
    </form>
</body>
</html>
