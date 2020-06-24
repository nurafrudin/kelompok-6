<?php  
session_start();
require("../sistem/koneksi.php");

$hub=open_connection();
$user=$_POST['user'];
$psw=$_POST['psw'];
$op=$_POST['op'];
if ($op=="in") {
	$cek=mysqli_query($hub, "S")
}
?>