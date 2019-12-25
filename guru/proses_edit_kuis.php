 <?php
	include'../koneksi/koneksi.php';

	if (isset($_POST['btnEdit'])) {
		//ambil data yang dikirim dari form edit guru
		 $varkelas          	 = $_POST['kelas'];
         $varjurusan        	 = $_POST['jurusan'];
         $varjudulkuis     	 	 = $_POST['judul'];
         $varjdeskripsikuis      = $_POST['deskripsi'];
         $mulaimengerjakan       = $_POST['waktu_mulai'];
         $selesaimengerjakan     = $_POST['waktu_selesai'];

		$varUpdate = mysqli_query($koneksi,"UPDATE tb_kuis SET id_kelas='$varkelas', id_jurusan='$varjurusan', judul='$varjudulkuis', deskripsi_kuis='$varjdeskripsikuis', mulai_mengerjakan='$mulaimengerjakan',selesai_mengerjakan='$selesaimengerjakan', tanggal_upload=now() WHERE id_kuis='".$_GET['id']."'");

		//var_dump($varUpdate);
		//echo "gagal";
		echo"<script>alert('Data Kuis berhasil di edit');window.location.href='kuis.php';</script>";
	}else{
		echo"<script>alert('Data Kuis gagal di edit');window.location.href='edit_kuis.php';</script>";
	}
?>

