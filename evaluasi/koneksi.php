<?php 
//koneksi ke database
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "db_evaluasi";

	$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));


 ?>