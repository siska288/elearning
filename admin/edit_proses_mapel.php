 <?php
	include'../koneksi/koneksi.php';

	if (isset($_POST['btnEdit'])) {
		//ambil data yang dikirim dari form edit guru
		$mapel		= $_POST['mapel'];
		$jurusan	= $_POST['jurusan'];
		$varkelas	= $_POST['kelas'];

		$varUpdate = mysqli_query($koneksi,"UPDATE tb_mapel SET nama_mapel='$mapel', id_jurusan='$jurusan', id_kelas='$varkelas' WHERE id_mapel='".$_GET['id']."'");

		//var_dump($varUpdate);
		//echo "gagal";
		echo"<script>alert('Data Mapel berhasil di edit');window.location.href='data_mapel.php';</script>";
	//}else{
		//echo "berhasil";
	}
?>

