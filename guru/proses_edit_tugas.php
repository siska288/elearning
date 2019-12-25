 <?php
	include'../koneksi/koneksi.php';

	if (isset($_POST['btnEdit'])) {
		//ambil data yang dikirim dari form edit guru
		 $varkelas          	 = $_POST['kelas'];
         $varjurusan        	 = $_POST['jurusan'];
         $varjudultugas     	 = $_POST['judul'];
         $varjdeskripsitugas     = $_POST['deskripsi'];
         $varbatasugas           = $_POST['batastugas'];


		$varUpdate = mysqli_query($koneksi,"UPDATE tb_tugas SET id_kelas='$varkelas', id_jurusan='$varjurusan', judul='$varjudultugas', deskripsi_tugas='$varjdeskripsitugas', batas_pengumpulan='$varbatasugas', tanggal_upload=now() WHERE id_tugas='".$_GET['id']."'");

		//var_dump($varUpdate);
		//echo "gagal";
		echo"<script>alert('Data Tugas berhasil di edit');window.location.href='tugas.php';</script>";
	}else{
		echo"<script>alert('Data Tugas gagal di edit');window.location.href='edit_tugas.php';</script>";
	}
?>

