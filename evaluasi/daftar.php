<?php 
require_once('koneksi.php');
	//jika tombol daftar diklik
	if(isset($_POST['tdaftar']))
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
	}

 ?>