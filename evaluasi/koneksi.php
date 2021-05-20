<?php 
//koneksi ke database
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "db_evaluasi";

	$koneksi = mysqli_connect($server, $user, $pass, $database);
	if(!$koneksi){
		die ("Koneksi tidak berhasil");
	}
?>