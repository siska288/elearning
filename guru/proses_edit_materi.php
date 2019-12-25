<?php
// Load file koneksi.php
include "../koneksi/koneksi.php";
// Ambil Data yang Dikirim dari Form
 if(isset($_POST['btnEdit'])){
$namamateri   = $_POST['materi'];
$varmaterilama = $_POST['filemateri'];
$varkelas     = $_POST['kelas'];
$varjurusan   = $_POST['jurusan'];
  //ambil data file
$namaFile      = $_FILES['file_materi']['name'];
$namaSementara = $_FILES['file_materi']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "dokumen_upload/";
 //query untuk menampilkan data materi berdasarkan id
      $tampil = mysqli_query($koneksi,"SELECT * FROM tb_materi WHERE id_materi='".$_GET['id']."'");
      //var_dump($tampil);
      $varData = mysqli_fetch_array($tampil);
      //hapus file yang sebelumnya
      unlink ("dokumen_upload/".$varmaterilama);

$jajal= move_uploaded_file($namaSementara, $dirUpload.$namaFile);
//var_dump($jajal); exit();
if ($jajal) {
    $update = "UPDATE tb_materi SET id_kelas='$varkelas',id_jurusan='$varjurusan',deskripsi_materi='$namamateri',nama_file='$namaFile', tanggal_upload=now() WHERE id_materi='".$_GET['id']."'";

    //var_dump($queryInset); exit();
  if ($update) {
    mysqli_query($koneksi, $update);
    //echo "masuk";
    echo "<script>alert('data berhasil diedit');document.location.href='materi.php'</script>";
  } else {
    //echo "gagal";
    echo "<script>alert('data gagal diedit');document.location.href='edit_materi.php'</script>";
  }
  } else {
    //echo "gagal upload";
    echo "<script>alert('file gagal diupload');document.location.href='edit_materi.php'</script>";
  }

}

     
?>