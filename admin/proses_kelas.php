<?php
include "../koneksi/koneksi.php";
if (isset($_POST['btnSimpan'])) {
	$varkelas   = $_POST['nama_kelas'];
	$varjurusan = $_POST['jurusan'];


	$queryInsert = mysqli_query($koneksi,"INSERT INTO tb_kelas(id_kelas,nama_kelas,id_jurusan) VALUES ('','$varkelas','$varjurusan')");
	if ($queryInsert) {
		echo "<script>alert('Data kelas berhasil ditambahkan');window.location.href='data_kelas.php';</script>";
	}else{
		echo "<script>alert('Data kelas gagal ditambahkan');window.location.href='tambah_kelas.php';</script>";
	}
}
?>