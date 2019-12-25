 <?php
	include'../koneksi/koneksi.php';

	if (isset($_POST['btnEdit'])) {
		//ambil data yang dikirim dari form edit guru
	$varidjurusan      = $_POST['id_jurusan'];
    $varnamajurusan    = $_POST['nama_jurusan'];

		$varUpdate = mysqli_query($koneksi,"UPDATE tb_jurusan SET nama_jurusan='$mapel', id_jurusan='$jurusan' WHERE id_jurusan='".$_GET['id']."'");

		//var_dump($varUpdate);
		//echo "gagal";
		echo"<script>alert('Data Jurusan berhasil di edit');window.location.href='data_jurusan.php';</script>";
	//}else{
		//echo "berhasil";
	}
?>

