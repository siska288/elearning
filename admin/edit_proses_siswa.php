 <?php
	include'../koneksi/koneksi.php';

	if (isset($_POST['btnEdit'])) {
		//ambil data yang dikirim dari form edit guru
		 $varnamasiswa         = $_POST['nama_siswa'];
         $varnis               = $_POST['nis'];
         $varkelas             = $_POST['id_kelas'];
         $varjurusan           = $_POST['id_jurusan'];
         $varjeniskelamin      = $_POST['jenis_kelamin'];
         $varstatus            = $_POST['status_pengguna'];


		$varUpdate = mysqli_query($koneksi,"UPDATE tb_siswa SET nis='$varnis', nama_siswa='$varnamasiswa', id_kelas='$varkelas', id_jurusan='$varjurusan', jenis_kelamin='$varjeniskelamin', status_pengguna='$varstatus' WHERE nis='".$_GET['id']."'");

		//var_dump($varUpdate);
		//echo "gagal";
		echo"<script>alert('Data Siswa berhasil di edit');window.location.href='data_siswa.php';</script>";
	//}else{
		//echo "berhasil";
	}
?>

