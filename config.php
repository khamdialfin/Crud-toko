<?php
$server="localhost";
$user="root";
$password="";
$nama_database="crudatk";

$db=mysqli_connect($server,$user,$password,$nama_database);
if(!$db){
    die("gagal menghubungkan database".mysqli_connect_error());
}
?>