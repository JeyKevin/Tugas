<?php 
//koneksi
require_once('koneksi.php');

//buat session
if (!isset($_SESSION)) {
	session_start();
}

//ambil data dari post
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

$query="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$data=mysqli_query($conn,$query);

//cek berapa jumlah data yang ada
$login=mysqli_num_rows($data);

if($login > 0 ) {
	$_SESSION['username']=$username;
	header("location: tampil_data.php");
} else {
	header("location: login.php");
}

 ?>