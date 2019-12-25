<?php
include "../koneksi/koneksi.php";
if (isset($_POST['btnSimpan'])) {
	$varnamasiswa   	= $_POST['nama_siswa'];
	$varnis 			= $_POST['nis'];
	$varkelas 			= $_POST['id_kelas'];
	$varjeniskelamin   	= $_POST['jenis_kelamin'];;
	$varjurusan   		= $_POST['id_jurusan'];
	$varstatus 			= $_POST['status_pengguna'];


	$queryInsert = mysqli_query($koneksi,"INSERT INTO tb_siswa(nama_siswa,nis,id_kelas,id_jurusan,jenis_kelamin,status_pengguna) VALUES ('$varnamasiswa','$varnis','$varkelas','$varjurusan','$varjeniskelamin','$varstatus')");
	
	if ($queryInsert) {
		echo "<script>alert('Data siswa berhasil ditambahkan');window.location.href='data_siswa.php';</script>";
	}else{
		echo "<script>alert('Data siswa gagal ditambahkan');window.location.href='tambah_siswa.php';</script>";
	}
}
?>