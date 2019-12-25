<?php
include "../koneksi/koneksi.php";
if (isset($_POST['btnSimpan'])) {
	$varmapel = $_POST['mapel'];
	$varkelas = $_POST['kelas'];
	$varjurusan = $_POST['jurusan'];


	$queryInsert = mysqli_query($koneksi,"INSERT INTO tb_mapel(id_mapel,id_kelas,id_jurusan,nama_mapel) VALUES ('','$varkelas','$varjurusan','$varmapel')");
	if ($queryInsert) {
		echo "<script>alert('Data mapel berhasil ditambahkan');window.location.href='data_mapel.php';</script>";
	}else{
		echo "<script>alert('Data mapel gagal ditambahkan');window.location.href='tambah_mapel.php';</script>";
	}
}
?>