<?php include("config.php");
    if(isset($_POST['simpan'])){
       $kode=  $_POST['kd_brg']; 
       $nama=  $_POST['nama']; 
       $harga= $_POST['harga']; 
       $merk=  $_POST['merk']; 
       $jumlah=$_POST['jumlah']; 
        
       $sql="update data_barang set nama='$nama', harga='$harga', merk='$merk', jumlah='$jumlah' where kd_brg='$kode'";
       $query= mysqli_query($db,$sql);

       if ($query) {
             header('location: index.php?status=sukses');
        } else {
             header('location: index.php?status=gagal');
       }
    }else{
        die("akses dilarang...");
    }
?>