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
                            <h2 class="pageheader-title">Data Nilai Tugas</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Nilai Tugas</a></li>
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
                             <a href="tambah_nilai_tugas.php" class="card-header"><button>Tambah Data Nilai Tugas</button>
                                <input style="float: right;" type="text" name="cari" placeholder="Cari Nilai Tugas">
                             </a> 
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                                <tr>
                                                <th>Nama Siswa</th>
                                                <th>Nama Tugas</th>
                                                <th>Nilai Tugas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         include"../koneksi/koneksi.php";
                                         $Querytampil = mysqli_query($koneksi,"SELECT * FROM tb_nilai_tugas");
                                         while ($tampiltabel = mysqli_fetch_array($Querytampil)) {
                                             $varidtugas           = $tampiltabel['id_tugas'];
                                             $varnis               = $tampiltabel['nis'];
                                             $varidnilaitugas       = $tampiltabel['id_nilai_tugas'];    
                                        ?>
                                        <tr>
                                            <td><?php echo $varidtugas ?></td>
                                            <td><?php echo $varnis ?></td>
                                            <td><?php echo $varnilaitugas ?></td>
                                            <td>
                                                <a href="edit_nilai_tugas.php?id=<?php echo $varidtugas ?>">Edit</a> |
                                                <a href="delete_niai_tugas.php?id=<?php echo $varidtugas ?>">Hapus</a>
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