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
                            <h2 class="pageheader-title">Data Kelas</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Kelas</a></li>
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
                             <a href="tambah_kelas.php" class="card-header"><button>Tambah Data Kelas</button>
                                <input style="float: right;" type="text" name="cari" placeholder="Cari Data Kelas">
                             </a> 
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <td>Id Kelas</td>
                                                <td>Nama Kelas</td>
                                                <td>Nama Jurusan</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         include"../koneksi/koneksi.php";
                                         $Querytampil = mysqli_query($koneksi,"SELECT * FROM tb_kelas JOIN tb_jurusan ON tb_jurusan.id_jurusan=tb_kelas.id_jurusan");
                                         while ($tampiltabel = mysqli_fetch_array($Querytampil)) {
                                             $varidkelas        = $tampiltabel['id_kelas'];
                                             $varnamakelas      = $tampiltabel['nama_kelas'];
                                             $varnamajurusan    = $tampiltabel['nama_jurusan'];
                                        ?>
                                        <tr>
                                            <td><?php echo $varidkelas ?></td>
                                            <td><?php echo $varnamakelas ?></td>
                                            <td><?php echo $varnamajurusan ?></td>
                                            <td>
                                                <a href="edit_kelas.php?id=<?php echo $varidkelas ?>">Edit</a> |
                                                <a href="delete_kelas.php?id=<?php echo $varidkelas ?>">Hapus</a>
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
<?php 
include "_partials/footer.php";
include "_partials/js.php";
 ?>