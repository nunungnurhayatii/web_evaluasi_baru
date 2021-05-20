<?php 
session_start();
if (isset($_POST['tdaftar'])) {
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek_user = mysqli_query($koneksi,"SELECT * FROM tdaftar WHERE username = '$username'and password = '$password'");
    $row = mysqli_num_rows($cek_user);

	if ($row > 0) {
        $fetch_pass = mysqli_fetch_assoc($cek_user);
				
				/*
				$cek_pass = $fetch_pass['password'];

				if ($cek_pass <> $password) {
					echo "<script>alert('Password salah'); </script>";
				}else{
					$_SESSION['log'] = true;
					echo "<script>alert('Login berhasil'); document.location.href='utama.php'</script>";
				}
			}else{
				echo "<script>alert('Username salah atau belum terdaftar');</script>";
				}
				*/
		$cek_pass = $fetch_pass['password'];

		if ($fetch_pass['level']=="admin") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			$_SESSION['log'] = true;
			echo "<script>alert('Login berhasil'); document.location.href='admin.php'</script>";
					
		}elseif ($fetch_pass['level'] == "peserta") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "peserta";
			$_SESSION['log'] = true;
			echo "<script>alert('Login berhasil'); document.location.href='halaman_utama.html'</script>";
		}else{
			echo "<script>alert('Masukkan username atau password');</script>";
		}
	}
?>