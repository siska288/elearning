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
                            <h2 class="pageheader-title">Data Materi</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Materi</a></li>
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
                             <a href="tambah_materi.php" class="card-header"><button>Tambah Materi</button>
                                <input style="float: right;" type="text" name="cari" placeholder="Cari Materi">
                             </a> 
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Id Materi</th>
                                                <th>Nama Pelajaran</th>
                                                <th>Nama Materi</th>
                                                <th>File Materi</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Pengajar</th>
                                                <th>Waktu Upload</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         include"../koneksi/koneksi.php";
                                         $Querytampil = mysqli_query($koneksi,"SELECT tb_materi.id_materi,tb_guru.nama_guru,tb_kelas.nama_kelas, tb_jurusan.nama_jurusan, tb_mapel.nama_mapel, tb_materi.deskripsi_materi, tb_materi.tanggal_upload, tb_materi.nama_file FROM tb_materi JOIN tb_mapel ON tb_mapel.id_mapel=tb_materi.id_mapel JOIN tb_kelas ON tb_kelas.id_kelas=tb_materi.id_kelas JOIN tb_guru ON tb_guru.id_guru=tb_materi.id_guru JOIN tb_jurusan ON tb_jurusan.id_jurusan=tb_materi.id_jurusan");
                                         while ($tampiltabel = mysqli_fetch_array($Querytampil)) {
                                             $varidmateri           = $tampiltabel['id_materi'];
                                             $varnamapelajaran      = $tampiltabel['nama_mapel'];
                                             $varnamamateri         = $tampiltabel['deskripsi_materi'];
                                             $varfilemateri         = $tampiltabel['nama_file'];
                                             $varkelas              = $tampiltabel['nama_kelas'];
                                             $varjurusan            = $tampiltabel['nama_jurusan'];
                                             $varpengajar           = $tampiltabel['nama_guru'];
                                             $varwaktupload         = $tampiltabel['tanggal_upload'];                                     
                                        ?>
                                        <tr>
                                            <td><?php echo $varidmateri ?></td>
                                            <td><?php echo $varnamapelajaran ?></td>
                                            <td><?php echo $varnamamateri ?></td>
                                            <td><a href="unduh_materi.php?file=<?php echo $varfilemateri ?>"><?php echo $varfilemateri ?></a></td>
                                            <td><?php echo $varkelas ?></td>
                                            <td><?php echo $varjurusan ?></td>
                                            <td><?php echo $varpengajar ?></td>
                                            <td><?php echo $varwaktupload ?></td>
                                            <td>
                                                <a href="edit_materi.php?id=<?php echo $varidmateri ?>">Edit</a> |
                                                <a href="delete_materi.php?id=<?php echo $varidmateri ?>">Hapus</a>
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