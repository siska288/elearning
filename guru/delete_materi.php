<?php
	include'../koneksi/koneksi.php';

	$query 		= mysqli_query($koneksi,"DELETE from tb_materi where id_materi='".$_GET['id']."'");
	$varQuery 	= mysqli_query($query);
	header("location:materi.php");
?>
?>