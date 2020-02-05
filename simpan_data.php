<?php 

//koneksi
include('koneksi.php');
include('keamanan.php');
//ambil data dari form
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$satuan=$_POST['satuan'];
$supplier=$_POST['supplier'];
$expired=$_POST['expired'];
$stok=$_POST['stok'];

//memasukan data ke database
$query="INSERT INTO tbpengurus VALUES 	('$kode_barang', '$nama_barang', '$satuan', '$supplier', '$expired', 'stok')";
$simpan=mysqli_query($conn,$query);

header('location: tampil_data.php');



// if($simpan){
// 	echo "Data Berhasil Disimpan";
// } else {
// 	echo "Data Gagal Disimpan";
// }


 ?>
 <!-- <a href="tampil_data.php"> Kembali Untuk Lihat Data </a> -->

