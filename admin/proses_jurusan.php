<?php
include "../koneksi/koneksi.php";
if (isset($_POST['btnSimpan'])) {
	$varjurusan = $_POST['jurusan'];


	$queryInsert = mysqli_query($koneksi,"INSERT INTO tb_jurusan(id_jurusan,nama_jurusan) VALUES ('', '$varjurusan')");
	if ($queryInsert) {
		echo "<script>alert('Data jurusan berhasil ditambahkan');window.location.href='data_jurusan.php';</script>";
	}else{
		echo "<script>alert('Data jurusan gagal ditambahkan');window.location.href='tambah_jurusan.php';</script>";
	}
}
?>