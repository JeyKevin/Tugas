<!DOCTYPE html>
<html>
<head>
	<title>
		Login
	</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<section class="s1"></section>
<body class="color" >

	<div class="isi">
	<h1 align="center" class="sign">Sign In</h1>
	<br>
	<div class="underline-title1"></div>

	
	<form method="POST" action="aksi_login.php">
		
		<br>
		<label class="us">Username :</label>
		<div class="form-group" align="center">
			<input type="text" name="username" required="required" class="i1">
			<div class="form-border"></div>
		</div>

		<label class="pas">Password :</label>
		<div class="form-group" align="center">
			<input type="password" name="password" required="required" class="i2">
			<div class="form-border"></div>
		</div>

		<br>

		<p align="center">
			<button type="submit" name="login" class="btn1">Login</button>
			
			<p align="center"><button type="reset" name="batal" class="btn2">Cancel</button></p>	
		</p>

	</form>
	</div>

</body>
</html>