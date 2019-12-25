<?php
// Load file koneksi.php
include "../koneksi/koneksi.php";
// Ambil Data yang Dikirim dari Form
 if(isset($_POST['btnSimpan'])){
$varmapel     = $_POST['id_mapel'];
$namamateri   = $_POST['materi'];
$varkelas     = $_POST['kelas'];
$varjurusan   = $_POST['jurusan'];
$varguru      = $_POST['id_guru'];
  //ambil data file
$namaFile      = $_FILES['file_materi']['name'];
$namaSementara = $_FILES['file_materi']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "dokumen_upload/";

$jajal= move_uploaded_file($namaSementara, $dirUpload.$namaFile);
//var_dump($jajal); exit();

  if ($jajal) {
    $queryInset = mysqli_query($koneksi,"INSERT INTO tb_materi(id_materi,id_guru,id_kelas,id_jurusan,id_mapel,deskripsi_materi,tanggal_upload,nama_file) VALUES ('','$varguru','$varkelas','$varjurusan','$varmapel','$namamateri',now(),'$namaFile')");
    //var_dump($queryInset); exit();
  if ($queryInset) {
    //echo "masuk";
    echo "<script>alert('data berhasil ditambahkan');document.location.href='materi.php'</script>";
  } else {
    //echo "gagal";
    echo "<script>alert('data gagal ditambahkan');document.location.href='tambah_materi.php'</script>";
  }
  } else {
    //echo "gagal upload";
    echo "<script>alert('file gagal diupload');document.location.href='tambah_materi.php'</script>";
  }

}
?>
