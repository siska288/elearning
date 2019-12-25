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
                            <h2 class="pageheader-title">Data Mapel</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Mapel</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
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
                            <a href="tambah_mapel.php" class="card-header"><button>Tambah Data Mapel</button></a>
                             <form>
                                <input style="float: right;" type="text" name="cari" placeholder="Cari Data Guru">
                                <input style="float: right; margin-left: 10px;" type="submit" name="btncari" value="Cari">
                             </form> 
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Id Mapel</th>
                                                <th>Nama Mapel</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         include"../koneksi/koneksi.php";
                                         $Querytampil = mysqli_query($koneksi,"SELECT * FROM tb_mapel JOIN tb_kelas ON tb_kelas.id_kelas=tb_mapel.id_kelas JOIN tb_jurusan ON tb_jurusan.id_jurusan=tb_mapel.id_jurusan");
                                         while ($tampiltabel = mysqli_fetch_array($Querytampil)) {
                                             $varidmapel        = $tampiltabel['id_mapel'];
                                             $varnamamapel      = $tampiltabel['nama_mapel'];
                                             $varidkelas        = $tampiltabel['nama_kelas'];
                                             $varidjurusan      = $tampiltabel['nama_jurusan'];
                                        ?>
                                        <tr>
                                            <td><?php echo $varidmapel ?></td>
                                            <td><?php echo $varnamamapel ?></td>
                                            <td><?php echo $varidkelas ?></td>
                                            <td><?php echo $varidjurusan ?></td>
                                            <td>
                                                <a href="edit_mapel.php?id=<?php echo $varidmapel ?>">Edit</a> |
                                                <a href="delete_mapel.php?id=<?php echo $varidmapel ?>">Hapus</a>
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