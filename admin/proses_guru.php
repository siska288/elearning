<?php
include "../koneksi/koneksi.php";
if (isset($_POST['btnSimpan'])) {
	$varnipguru  = $_POST['nip_guru'];
	$varnamaguru = $_POST['nama_guru'];
	$vargender   = $_POST['jenis_kelamin'];
	$varstatus   = $_POST['status_pengguna'];


	$queryInsert = mysqli_query($koneksi,"INSERT INTO tb_guru(nip,nama_guru,jenis_kelamin,id_guru,status) VALUES ('$varnipguru','$varnamaguru','$vargender','','$varstatus')");
	
	if ($queryInsert) {
		echo "<script>alert('Data guru berhasil ditambahkan');window.location.href='data_guru.php';</script>";
	}else{
		echo "<script>alert('Data guru gagal ditambahkan');window.location.href='tambah_guru.php';</script>";
	}
}
?>