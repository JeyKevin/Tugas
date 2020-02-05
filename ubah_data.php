<?php 

require_once('koneksi.php');

//ambil data dari form
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$satuan=$_POST['satuan'];
$supplier=$_POST['supplier'];
$expired=$_POST['expired'];
$stok=$_POST['stok'];

//memasukan data ke database
$query="UPDATE tbpengurus SET kode_barang = '$kode_barang', nama_barang = '$nama_barang', satuan = '$satuan', supplier = '$supplier', expired = '$expired', stok ='$stok' WHERE kode_barang = '$kode_barang'";

$ubah=mysqli_query($conn,$query);

header('location: tampil_data.php');
 ?>