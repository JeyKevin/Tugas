<!DOCTYPE html>
<html>
<head>
	<title>Edit data PHP</title>

	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="bootstrap.min.css">

</head>
<body style="background-color: #d9d9d9;">



<?php 
	//koneksi
		require_once('keamanan.php');
		require_once('koneksi.php');
		$kode_barang=$_GET['kode_barang'];

	// echo $id;
		$query="SELECT * FROM tbpengurus WHERE kode_barang = '$kode_barang'";
		$data=mysqli_query($conn,$query);

	// menampung hasil 
		$row=mysqli_fetch_assoc($data);


 ?>


<!-- header -->
	<section class="judul">
		<div class="container">
			<div class="row">
				<div class="col-lg-12" align="center">
					<h1 class="txt1">Input Data</h1>
					<hr>
				</div>
			</div>
		</div>
<!-- header -->

<!-- isi -->
	<section class="isi"> 
	<div class="container">
		<div class="row ">
			<div class="col-sm-12">

		<form method="POST" action="ubah_data.php">

		<div class="form-group">
			<label for="kode_barang"><h5>Kode Barang</h5></label>
			<input type="text" name="kode_barang" class="form-control" required="required" value="<?php echo $row['kode_barang']; ?>">
		</div>

		<div class="form-group">
			<label for="nama_barang"><h5>Nama Barang</h5></label>
			<input type="text" name="nama_barang" class="form-control" required="required" value="<?php echo $row['nama_barang']; ?>">
		</div>

		<div class="form-group">
			<label for="satuan"><h5>Satuan</h5></label>
			<input type="text" name="satuan" class="form-control" value="<?php echo $row['satuan']; ?>">
		</div>

		<div class="form-group">
			<label for="supplier"><h5>Supplier</h5></label>
			<input type="text" name="supplier" class="form-control" value="<?php echo $row['supplier']; ?>">
		</div>

		<div class="form-group">
			<label for="expired"><h5>Expired</h5></label>
			<input type="date" name="expired" class="form-control" required="required" value="<?php echo $row['expired']; ?>">
		</div>

		<div class="form-group">
			<label for="stok"><h5>Stok</h5></label>
			<input type="number" name="stok" class="form-control" value="<?php echo $row['stok']; ?>">
		</div>

		<br>
		<br>


		<p align="center"><button type="submit" name="ubah" class="btn btn-success"> Change </button></p>
		<br>

		<p align="center"><form method="post" action="tampil_data.html">
			<button type="submit" class="btn btn-danger"> Cancel </button>
		</form></p>

			</form>
			</div>
		</div>
	</div>
	</section>
<!-- isi -->

</body>
</html>





