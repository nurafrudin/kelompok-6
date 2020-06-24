<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewvort" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="csslogin.css">
	<title>USER AUTHENTICATION</title>
</head>

<body>

<CENTER><h1>SILAHKAN LOGIN</h1></CENTER>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Login User</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
 			<center><label><input type="checkbox"></input>Remember me</label></center>
 			
 			<br>
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="daftar.php">Daftar</a>
			</center>
		</form>
		
	</div>
 
 
	
</form>


</body>
</html>

