<?php 
session_start();
if (isset($_POST['tdaftar'])) {
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek_user = mysqli_query($koneksi,"SELECT * FROM tdaftar WHERE username = '$username'");
    $row = mysqli_num_rows($cek_user);

    if ($row === 1) {
        $fetch_pass = mysqli_fetch_assoc($cek_user);
        $cek_pass = $fetch_pass['password'];
        if ($cek_pass <> $password) {
            echo "<script>alert('Password salah'); </script>";
        }else{
            $_SESSION['log'] = true;
            echo "<script>alert('Login berhasil'); document.location.href='halaman_utama.html'</script>";
        }
    }else{
        echo "<script>alert('Username salah atau belum terdaftar');</script>";
        }
    }


 ?>