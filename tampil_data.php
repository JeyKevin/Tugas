<?php 
//memanggil koneksi
	include('koneksi.php');
	include('keamanan.php');
	$query="SELECT * FROM tbpengurus";
	$data=mysqli_query($conn,$query);
	
	//var_dump($data);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Pengurus</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  	<link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  	<link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet"> -->
</head>
<body>

<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-info ">
    <a class="navbar-brand" href="home.html">Data</a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fa fa-info-circle"></i> Log-Out</a>
        </li>
      </ul>
    </div>
  </nav>
<!-- navbar -->

<section class="table">
<h1 align="center" class="jdl">Management Data</h1>
<hr>
<br>


	<table border="3" align="center">
	<thead class="thead-dark">
		<tr>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Satuan</th>
			<th>Supplier</th>
			<th>expired</th>
			<th>stok</th>
			<th>Edit</th>

		</tr>
	</thead>
	<?php 
		while($row=mysqli_fetch_assoc($data)){
	 ?>
		<tbody>
		<tr class="tr1">
			<td><?php echo $row['kode_barang']; ?></td>
			<td><?php echo $row['nama_barang']; ?></td>
			<td><?php echo $row['satuan']; ?></td>
			<td><?php echo $row['supplier']; ?></td>
			<td><?php echo $row['expired']; ?></td>
			<td><?php echo $row['stok']; ?></td>
			<td>
				<a href="edit_data.php?kode_barang=<?php echo $row['kode_barang']; ?> "> <i class="material-icons">edit</i> </a> | 
				<a href="hapus_data.php?kode_barang=<?php echo $row['kode_barang']; ?> " onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data?')" > <i class="material-icons ihps" style="color: red">delete_forever</i> </a>

			</td>
		</tr>
		</tbody>
	<?php 
		}	
	?>
	</table>
</section>







<div class="row">
	<div class="container">
		<div class="col-sm-12">
				<form method="POST" action="simpan_data.php">

					<div class="form-group">
						<label for="kode">Kode Barang</label>
						<input type="text" name="kode_barang" class="form-control" required="required" class="ipjg">
					</div>

					<div class="form-group">
						<label for="nama">Nama Barang</label>
						<input type="text" name="nama_barang" class="form-control" required="required" class="ipjg">
					</div>

					<div class="form-group">
						<label for="satuan">Satuan</label>
						<input type="text" name="satuan" class="form-control" required="required" class="ipjg">
					</div>

					<div class="form-group">
						<label for="supplier">Supplier</label>
						<input type="text" name="supplier" class="form-control" required="required" class="ipjg">
					</div>

					<div class="form-group">
						<label for="expired">Expired</label>
						<input type="date" name="expired" class="form-control" required="required" class="ipjg">
					</div>

					<div class="form-group">
						<label for="stok">Stok</label>
						<input type="number" name="stok" class="form-control" required="required" class="ipjg">
					</div>

					<p align="center"><button type="submit" name="simpan" class="btn btn-success"> <i class="material-icons sv">save_alt</i></button></p>
					
					<p align="center"><button type="reset" name="batal" class="btn btn-danger"> <i class="material-icons">cancel</i> </button></p>

				</form>
		</div>
	</div>
</div>
</body>
</html>