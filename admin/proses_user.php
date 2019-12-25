<?php
include "../koneksi/koneksi.php";
if (isset($_POST['btnSimpan'])) {
	$varnamapengguna   	= $_POST['nama_pengguna'];
	$varuser 			= $_POST['username'];
	$varpassword 	    = md5($_POST['password']);
	$varlevel   	    = $_POST['level'];


	$queryInsert = mysqli_query($koneksi,"INSERT INTO tb_pengguna(id_pengguna,nama_pengguna,username,password,status,foto) VALUES ('','$varnamapengguna','$varuser','$varpassword','$varlevel','default.jpg')");
	
	if ($queryInsert) {
		echo "<script>alert('Data user berhasil ditambahkan');window.location.href='data_user.php';</script>";
	}else{
		echo "<script>alert('Data user gagal ditambahkan');window.location.href='tambah_user.php';</script>";
	}
}
?>