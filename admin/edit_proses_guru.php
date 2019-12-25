 <?php
	include'../koneksi/koneksi.php';

	if (isset($_POST['btnEdit'])) {
		//ambil data yang dikirim dari form edit guru
		 $varidguru           = $_POST['id_guru'];
         $varNIP              = $_POST['nip'];
         $varnamaguru         = $_POST['nama_guru'];
         $varjeniskelamin     = $_POST['jenis_kelamin'];
         $varstatus           = $_POST['status'];


		$varUpdate = mysqli_query($koneksi,"UPDATE tb_guru SET nip='$varNIP', nama_guru='$varnamaguru',   jenis_kelamin='$varjeniskelamin', status='$varstatus' WHERE nip='".$_GET['id']."'");

		//var_dump($varUpdate);
		//echo "gagal";
		echo"<script>alert('Data Guru berhasil di edit');window.location.href='data_guru.php';</script>";
	//}else{
		//echo "berhasil";
	}
?>

