<?php
include "koneksi/koneksi.php";


	$username	= $_POST['username'];
	$password	= $_POST['password'];

	if ($_POST['login']) {
		if ($username == "" || $password == "") {
			echo "<script>alert('Username dan password tidak boleh kosong!');
			window.location=('index.php')</script>";
	}else{
	 $query	= mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE username='$username' AND password='$password'");
	 $varData = mysqli_fetch_array($query);
	 $varRow  = mysqli_num_rows($query);

	 if ($varRow>0) {
	 	session_start();
	 	if ($varData['status'] == "admin") {
	 		@$_SESSION["admin"] = $varData['username'];
		 	echo "<script>alert('Anda adalah Admin, selamat datang di halaman admin');
 		 window.location=('admin/index.php')</script>";
	 	}elseif ($varData['status'] == "guru") {
	 		@$_SESSION["guru"] = $varData['username'];
		 	echo "<script>alert('Anda adalah Guru, selamat datang di halaman guru');
 		 window.location=('guru/index.php')</script>";
	 	}elseif ($varData['status'] == "siswa") {
	 		@$_SESSION["siswa"] = $varData['username'];
		 	echo "<script>alert('Anda adalah Siswa, selamat datang di halaman siswa');
 		 window.location=('siswa/index.php')</script>";
 		}		
	}

else{
		echo "<script>alert('Login gagal, periksa username atau password');
 		 window.location=('index.php')</script>";
	} 
}
}
?>