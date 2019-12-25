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
                            <h2 class="pageheader-title">Data User</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="data_user.php" class="breadcrumb-link">Data User</a></li>
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
                            <a href="tambah_user.php" class="card-header"><button>Tambah Data User</button></a>
                                <form>
                                <input style="float: right;" type="text" name="cari" placeholder="Cari Data Guru">
                                <input style="float: right; margin-left: 10px;" type="submit" name="btncari" value="Cari">
                             </form> 
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id Pengguna</th>
                                                <th>Nama Lengkap</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Level</th>
                                                <th>Foto</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                         include"../koneksi/koneksi.php";
                                         $Querytampil = mysqli_query($koneksi,"SELECT * FROM tb_pengguna");
                                         while ($tampiltabel = mysqli_fetch_array($Querytampil)) {
                                             $varidpengguna         = $tampiltabel['id_pengguna'];
                                             $varnama               = $tampiltabel['nama_pengguna'];
                                             $varuser             = $tampiltabel['username'];
                                             $varpassword           = $tampiltabel['password'];
                                             $varlevel      = $tampiltabel['status'];
                                             $varfoto            = $tampiltabel['foto'];
                                        ?>
                                            <tr>
                                                <td><?php echo $varidpengguna ?></td>
                                                <td><?php echo $varnama ?></td>
                                                <td><?php echo $varuser ?></td>
                                                <td><?php echo $varpassword ?></td>
                                                <td><?php echo $varlevel ?></td>
                                                <td><?php echo $varfoto ?></td>
                                                <td>
                                                    <a href="">Delete</a>
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