<?php
 include '../koneksi/koneksi.php';

 if(isset($_POST['btnSimpan'])){
 $varpelajaran   		= $_POST['id_mapel'];
 //var_dump($varpelajaran);
 $varkuis		  		= $_POST['judul_kuis'];
 //var_dump($vartugas);
 $varisikuis			= $_POST['deskripsi_kuis'];
 //var_dump($varisitugas);
 $varmulaimengerjakan	= $_POST['waktu_mulai'];
 $varselesaimengerjakan	= $_POST['waktu_selesai'];
 //var_dump($varbatastugas);
 $varkelas				= $_POST['kelas'];
//var_dump($varkelas);
 $varjurusan			= $_POST['jurusan'];
 //var_dump($varpengajar);
 $varpengajar           = $_POST['id_guru'];

 
$queryInset	= mysqli_query($koneksi,"INSERT INTO tb_kuis(id_kuis,id_guru,id_kelas,id_jurusan,id_mapel,judul,deskripsi_kuis,tanggal_upload,mulai_mengerjakan,selesai_mengerjakan) VALUES ('','$varpengajar','$varkelas','$varjurusan','$varpelajaran','$varkuis','$varisikuis',now(),'$varmulaimengerjakan','$varselesaimengerjakan')");
//var_dump($queryInset);
if ($queryInset) {
	//echo "masuk";
	echo"<script>alert('Data Kuis berhasil di tambahkan');window.location.href='kuis.php';</script>";
}else{
	//echo "gagal";
	echo"<script>alert('Data Kuis gagal ditambahkan');window.location.href='tambah_kuis.php';</script>";
}
}
?>