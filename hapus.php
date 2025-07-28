<?php
include("config.php");

if (isset($_GET['kd_brg'])) {
    $kode = $_GET['kd_brg'];

    $sql = "DELETE FROM data_barang WHERE kd_brg = '$kode'";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: index.php?status=sukses');
    } else {
        header('location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>