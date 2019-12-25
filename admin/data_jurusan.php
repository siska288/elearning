<?php 
include "_partials/header.php";
include "_partials/sidebar.php";
 ?>
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
                            <h2 class="pageheader-title">Data Jurusan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="data_jurusan.php" class="breadcrumb-link">Data jurusan</a></li>
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
                            <a href="tambah_jurusan.php" class="card-header"><button>Tambah Data Jurusan</button>
                                <input style="float: right;" type="text" name="cari" placeholder="Cari Data Jurusan">
                                <a> 
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <td>Id Jurusan</td>
                                                <td>Nama Jurusan</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         include"../koneksi/koneksi.php";
                                         $Querytampil = mysqli_query($koneksi,"SELECT * FROM tb_jurusan");
                                         while ($tampiltabel = mysqli_fetch_array($Querytampil)) {
                                             $varidjurusan      = $tampiltabel['id_jurusan'];
                                             $varnamajurusan    = $tampiltabel['nama_jurusan'];
                                        ?>
                                        <tr>
                                            <td><?php echo $varidjurusan ?></td>
                                            <td><?php echo $varnamajurusan ?></td>
                                            <td>
                                                <a href="edit_jurusan.php?id=<?php echo $varidjurusan ?>">Edit</a> |
                                                <a href="delete_jurusan.php?id=<?php echo $varidjurusan ?>">Hapus</a>
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
<?php 
include "_partials/footer.php";
include "_partials/js.php";
 ?>