 <?php
	include'../koneksi/koneksi.php';

	if (isset($_POST['btnEdit'])) {
		//ambil data yang dikirim dari form edit guru
            $varnamakelas      = $_POST['nama_kelas'];
            $varnamajurusan    = $_POST['jurusan'];

		$varUpdate = mysqli_query($koneksi,"UPDATE tb_kelas SET nama_kelas='$varnamakelas', id_jurusan='$varnamajurusan' WHERE id_kelas='".$_GET['id']."'");

		//var_dump($varUpdate);
		//echo "gagal";
		echo"<script>alert('Data Kelas berhasil di edit');window.location.href='data_kelas.php';</script>";
	//}else{
		//echo "berhasil";
	}
?>

