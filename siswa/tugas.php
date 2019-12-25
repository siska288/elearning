<?php
include '../koneksi/koneksi.php';
include 'header.php';
include 'sidebar.php';
?>

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
                            <h2 class="pageheader-title">Data Tugas</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Tugas</a></li>
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
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                                <tr>
                                                <th>Id Tugas</th>
                                                <th>Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Judul</th>
                                                <th>Dskripsi Tugas</th>
                                                <th>Batas Pengumpulan</th>
                                                <th>Pengajar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         include"../koneksi/koneksi.php";
                                         $Querytampil = mysqli_query($koneksi,"SELECT tb_tugas.id_tugas, tb_guru.nama_guru, tb_kelas.nama_kelas, tb_jurusan.nama_jurusan , tb_mapel.nama_mapel, tb_tugas.judul, tb_tugas.deskripsi_tugas, tb_tugas.tanggal_upload, tb_tugas.batas_pengumpulan FROM tb_tugas JOIN tb_guru ON tb_guru.id_guru=tb_tugas.id_guru JOIN tb_kelas ON tb_kelas.id_kelas=tb_tugas.id_kelas JOIN tb_jurusan ON tb_jurusan.id_jurusan=tb_tugas.id_jurusan JOIN tb_mapel ON tb_mapel.id_mapel=tb_tugas.id_mapel");
                                         while ($tampiltabel = mysqli_fetch_array($Querytampil)) {
                                             $varidtugas           = $tampiltabel['id_tugas'];
                                             $varidkelas           = $tampiltabel['nama_kelas'];
                                             $varidjurusan         = $tampiltabel['nama_jurusan'];
                                             $varidmapel           = $tampiltabel['nama_mapel'];
                                             $varjudul             = $tampiltabel['judul'];
                                             $vardesktugas         = $tampiltabel['deskripsi_tugas'];
                                             $varbataskumpul       = $tampiltabel['batas_pengumpulan'];
                                             $varidguru            = $tampiltabel['nama_guru'];

                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $varidtugas ?></td>
                                            <td><?php echo $varidkelas ?></td>
                                            <td><?php echo $varidjurusan ?></td>
                                            <td><?php echo $varidmapel ?></td>
                                            <td><?php echo $varjudul ?></td>
                                            <td><?php echo $vardesktugas ?></td>
                                            <td><?php echo $varbataskumpul ?></td>
                                            <td><?php echo $varidguru ?></td>
                                            <td>
                                                <a href="upload_tugas.php?id=<?php echo $varidtugas ?>">Upload Tugas</a> 
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
<?php 
 include 'footer.php';
 include 'js.php';
 ?>