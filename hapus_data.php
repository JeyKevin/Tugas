<?php 
//koneksi
require_once('koneksi.php');
$kode_barang=$_GET['kode_barang'];

// echo $id;
$query="DELETE FROM tbpengurus WHERE kode_barang = '$kode_barang'";
$data=mysqli_query($conn,$query);

header('location: tampil_data.php')


 ?>
