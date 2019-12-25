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
                            <h2 class="pageheader-title">Data Siswa</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Siswa</a></li>
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
                             <a href="tambah_siswa.php" class="card-header"><button>Tambah Data Siswa</button></a>
                               <form>
                                <input style="float: right;" type="text" name="cari" placeholder="Cari Data Guru">
                                <input style="float: right; margin-left: 10px;" type="submit" name="btncari" value="Cari">
                             </form> 
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                             <tr>
                                                <th>Nama Siswa</th>
                                                <th>NIS</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         include"../koneksi/koneksi.php";
                                         $Querytampil = mysqli_query($koneksi,"SELECT * FROM tb_siswa JOIN tb_kelas ON tb_kelas.id_kelas=tb_siswa.id_kelas JOIN tb_jurusan ON tb_jurusan.id_jurusan=tb_siswa.id_jurusan");
                                         while ($tampiltabel = mysqli_fetch_array($Querytampil)) {
                                             $varnamasiswa         = $tampiltabel['nama_siswa'];
                                             $varnis               = $tampiltabel['nis'];
                                             $varkelas             = $tampiltabel['nama_kelas'];
                                             $varjurusan           = $tampiltabel['nama_jurusan'];
                                             $varjeniskelamin      = $tampiltabel['jenis_kelamin'];
                                             $varstatus            = $tampiltabel['status_pengguna'];
                                        ?>
                                        <tr>
                                            <td><?php echo $varnamasiswa ?></td>
                                            <td><?php echo $varnis ?></td>
                                            <td><?php echo $varkelas ?></td>
                                            <td><?php echo $varjurusan ?></td>
                                            <td><?php echo $varjeniskelamin ?></td>
                                            <td><?php echo $varstatus ?></td>
                                            <td>
                                                <a href="edit_siswa.php?id=<?php echo $varnis ?>">Edit</a> |
                                                <a href="delete_siswa.php?id=<?php echo $varnis ?>">Hapus</a>
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
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2019 E-learning SMK Muhammadiyah Mlati
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
<?php 
include "_partials/footer.php";
include "_partials/js.php";
 ?>