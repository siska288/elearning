<?php
 include '../koneksi/koneksi.php';
?>
<?php 
include "_partials/header.php";
include "_partials/sidebar.php";
 ?>
              <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Kuis</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Kuis</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                             <a href="tambah_kuis.php" class="card-header"><button>Tambah Kuis</button>
                                <input style="float: right;" type="text" name="cari" placeholder="Cari Kuis">
                             </a> 
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                                   <tr>
                                                <th>Id Kuis</th>
                                                <th>Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Judul</th>
                                                <th>Dskripsi kuis</th>
                                                <th>Mulai Mengerjakan</th>
                                                <th>Selesai Mengerjakan</th>
                                                <th>Pengajar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         include"../koneksi/koneksi.php";
                                         $Querytampil = mysqli_query($koneksi,"SELECT tb_kuis.id_kuis, tb_guru.nama_guru, tb_kelas.nama_kelas, tb_jurusan.nama_jurusan, tb_mapel.nama_mapel, tb_kuis.judul, tb_kuis.deskripsi_kuis, tb_kuis.tanggal_upload, tb_kuis.mulai_mengerjakan, tb_kuis.selesai_mengerjakan FROM tb_kuis JOIN tb_guru ON tb_guru.id_guru=tb_kuis.id_guru JOIN tb_kelas ON tb_kelas.id_kelas=tb_kuis.id_kelas JOIN tb_jurusan ON tb_jurusan.id_jurusan=tb_kuis.id_jurusan JOIN tb_mapel ON tb_mapel.id_mapel=tb_kuis.id_mapel");
                                         while ($tampiltabel = mysqli_fetch_array($Querytampil)) {
                                             $varidkuis            = $tampiltabel['id_kuis'];
                                             $varidguru            = $tampiltabel['nama_guru'];
                                             $varidkelas           = $tampiltabel['nama_kelas'];
                                             $varidjurusan         = $tampiltabel['nama_jurusan'];
                                             $varidmapel           = $tampiltabel['nama_mapel'];
                                             $varjudul             = $tampiltabel['judul'];
                                             $vardesktugas         = $tampiltabel['deskripsi_kuis'];
                                             $varmulaimengerjakan  = $tampiltabel['mulai_mengerjakan'];
                                             $selesaimengerjakan   = $tampiltabel['selesai_mengerjakan'];
                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $varidkuis ?></td>
                                            <td><?php echo $varidmapel ?></td>
                                            <td><?php echo $varidkelas ?></td>
                                            <td><?php echo $varidjurusan ?></td>
                                            <td><?php echo $varjudul ?></td>
                                            <td><?php echo $vardesktugas ?></td>
                                            <td><?php echo $varmulaimengerjakan ?></td>
                                            <td><?php echo $selesaimengerjakan ?></td>
                                            <td><?php echo $varidguru ?></td>
                                            <td>
                                                <a href="edit_kuis.php?id=<?php echo $varidkuis ?>">Edit</a> |
                                                <a href="delete_kuis.php?id=<?php echo $varidkuis ?>"onclick="return confirm('yakin ingin menghapus data kuis ini?')">Hapus</a> |
                                                <a href="#">Buat Soal</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                         <tfoot>
                                             <?php
                                            }
                                            ?>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
<?php 
include "_partials/footer.php";
include "_partials/js.php";
 ?>