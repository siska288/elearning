<?php
 include '../koneksi/koneksi.php';

 if(isset($_POST['btnSimpan'])){
 $varpelajaran   		= $_POST['id_mapel'];
 //var_dump($varpelajaran);
 $vartugas		  		= $_POST['judul'];
 //var_dump($vartugas);
 $varisitugas			= $_POST['deskripsi'];
 //var_dump($varisitugas);
 $varbatastugas			= $_POST['batastugas'];
 //var_dump($varbatastugas);
 $varkelas				= $_POST['kelas'];
//var_dump($varkelas);
 $varjurusan			= $_POST['jurusan'];
 //var_dump($varpengajar);
 $varpengajar           = $_POST['id_guru'];

 
$queryInset	= mysqli_query($koneksi,"INSERT INTO tb_tugas(id_tugas,id_guru,id_kelas,id_jurusan,id_mapel,judul,deskripsi_tugas,tanggal_upload,batas_pengumpulan) VALUES ('','$varpengajar','$varkelas','$varjurusan','$varpelajaran','$vartugas','$varisitugas',now(),'$varbatastugas')");
//var_dump($queryInset);
if ($queryInset) {
	//echo "masuk";
	echo"<script>alert('Data Tugas berhasil di tambahkan');window.location.href='tugas.php';</script>";
}else{
	//echo "gagal";
	echo"<script>alert('Data Tugas gagal ditambahkan');window.location.href='tambah_tugas.php';</script>";
}
}
?>