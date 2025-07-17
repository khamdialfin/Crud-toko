<?php
    include("config.php");
    if(isset($_POST['daftar'])){
        $kode=mysqli_real_escape_string($db, $_POST['kd_brg']);
        $nama=mysqli_real_escape_string($db, $_POST['nama']);
        $harga=mysqli_real_escape_string($db, $_POST['harga']);
        $merk=mysqli_real_escape_string($db, $_POST['merk']);
        $jumlah=mysqli_real_escape_string($db, $_POST['jumlah']);

        $sql = "insert into data_barang (kd_brg,nama,harga,merk,jumlah) values ('$kode','$nama','$harga','$merk','$jumlah')";
        $query = mysqli_query($db,$sql);

        if($query){
            header('location: index.php?status=sukses');
        }else{
            header('location: index.php?status=gagal');
        }
    }else{
        die("akses dilarang...");
    }
?>