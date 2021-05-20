<?php 
session_start();
include "koneksi.php";

//deklarasikan dulu data nya
$nama = $asal_sekolah = $username = $password = $nama_err = $asal_sekolah_err = $username_err = $password_err = "";
	//jika tombol daftar diklik
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		if (empty(trim($_POST['nama']))) {
			$nama_err = "Maaf nama harus di isi";
		}else{
			$nama = $_POST['nama'];
		}
		if (empty(trim($_POST['asal_sekolah']))) {
			$asal_sekolah_err = "Maaf asal sekolah harus di isi";
		}else{
			$asal_sekolah = $_POST['asal_sekolah'];
		}
		if (empty(trim($_POST['username']))) {
			$username_err = "Maaf username harus di isi";
		}else{
			$username = $_POST['username'];
		}
		if (empty(trim($_POST['password']))) {
			$password_err = "Maaf password harus di isi";
		}else{
			$password = $_POST['password'];
		}
		if (empty($nama_err) && empty($asal_sekolah_err) && empty($username_err) && empty($password_err)) {
			
		//Query menambahkan data peserta
		$sql = "INSERT INTO `daftar` (`nama`, `asal_sekolah`, `username`, `password`) VALUES ('".$nama."', '".$asal_sekolah."', '".$username."', '".$password."');";
		

		$query = mysqli_query($koneksi, $sql);
			if ($query) {
				echo "<script>alert('Data Berhasil Tersimpan'); document.location.href='halaman_login.html'</script>";
				}else{
				echo "<script>alert('Data Gagal Tersimpan')</script>";
				}
			}
		}
	session_destroy();
	/*if(isset($_POST['tdaftar']))
	{
		$simpan = mysqli_query($koneksi, "INSERT INTO tdaftar 
											(nama, sekolah, username, password)
											VALUES '$_POST[tnama]', 
													'$_POST[tsekolah]',
													'$_POST[tusername]', 
													'$_POST[tpassword]'
										");
		if($simpan)	//jika berhasil daftar
		{
			echo "<script>
					alert('Berhasil daftar!');
					document.location = 'daftar.php';
				</script>";
		}
		else
		{
			echo "<script>
					alert('Gagal Daftar!');
					document.location = 'daftar.php';
				</script>";
		}
	}*/

 ?>