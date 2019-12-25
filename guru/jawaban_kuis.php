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
                            <h2 class="pageheader-title">Data Jawaban Kuis</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Jawaban Kuis</a></li>
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
                             <a href="tambah_guru.php" class="card-header"><button>Tambah Data Jawaban Kuis</button><input style="float: right;" type="text" name="cari" placeholder="Jawaban Kuis">
                             </a> 
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                                <tr>
                                                <th>Id Jawaban</th>
                                                <th>NIS</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kuis</th>
                                                <th>Soal</th>
                                                <th>Jawaban</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         include"../koneksi/koneksi.php";
                                         $Querytampil = mysqli_query($koneksi,"SELECT * FROM tb_jawaban_kuis");
                                         while ($tampiltabel = mysqli_fetch_array($Querytampil)) {
                                             $varidjawaban        = $tampiltabel['id_jawaban'];
                                             $varnis               = $tampiltabel['id_guru'];
                                             $varklas              = $tampiltabel['id_kelas'];
                                             $varidjurusan         = $tampiltabel['id_jurusan'];
                                             $varidmapel           = $tampiltabel['id_mapel'];
                                             $varidkuis            = $tampiltabel['id_kuis'];
                                             $varsoal              = $tampiltabel['soal'];
                                             $varjawaban           = $tampiltabel['jawaban'];
                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $varidjawaban ?></td>
                                            <td><?php echo $varnis ?></td>
                                            <td><?php echo $varidkelas ?></td>
                                            <td><?php echo $varidjurusan ?></td>
                                            <td><?php echo $varidmapel ?></td>
                                            <td><?php echo $varidkuis ?></td>
                                            <td><?php echo $varsoal ?></td>
                                            <td><?php echo $varjawaban ?></td>
                                            <td>
                                                <a href="edit_jawaban_kuis.php?id=<?php echo $varidjawaban ?>">Edit</a> |
                                                <a href="delete_jawaban_kuis.php?id=<?php echo $varidjawaban ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                         <tfoot>
                                            < <?php
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