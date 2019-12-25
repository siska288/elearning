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
                            <h2 class="pageheader-title">Tambah Data Kuis</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="tambah_kuis.php" class="breadcrumb-link">Tambah Data Kuis</a></li>
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Input Data Kuis</h5>
                                <div class="card-body">
                                    <?php
                                            include '../koneksi/koneksi.php';
                                            $varsqlmapel= mysqli_query($koneksi,"SELECT * FROM tb_mapel WHERE id_mapel='6'");
                                            $sqlmapel = mysqli_fetch_array($varsqlmapel);
                                        ?>
                                    <form action="proses_kuis.php" method="POST">
                                         <div class="form-group">
                                            <label for="inputnama">Pelajaran</label>
                                            <input name="id_mapel" readonly="true" type="hidden" class="form-control" value="<?php echo $sqlmapel['id_mapel'] ?>">
                                            <input name="nama_mapel" readonly="true" type="text" class="form-control"  value="<?php echo $sqlmapel['nama_mapel'] ?>">
                                        </div>
                                           <div class="form-group">
                                            <label for="inputnama">Kelas</label>
                                            <select name="kelas" class="form-control">
                                                <option>Pilih Kelas</option>
                                                <?php
                                                    include"../koneksi/koneksi.php";
                                                    $kelas = mysqli_query($koneksi,"SELECT * FROM tb_kelas");
                                                    while ($tampil = mysqli_fetch_array($kelas)) {
                                                    ?>
                                                    <option value="<?php echo $tampil['id_kelas']?>"><?php echo $tampil['nama_kelas']?>
                                                <?php
                                                }
                                                ?>
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama">Jurusan</label>
                                            <select name="jurusan" class="form-control">
                                              <option>Pilih Jurusan</option>
                                                <?php
                                                    include"../koneksi/koneksi.php";
                                                    $jurusan = mysqli_query($koneksi,"SELECT * FROM tb_jurusan");
                                                    while ($tampil = mysqli_fetch_array($jurusan)) {
                                                ?>
                                                    <option value="<?php echo $tampil['id_jurusan']?>"><?php echo $tampil['nama_jurusan']?>
                                                <?php
                                                    }
                                                ?>
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama">Judul</label>
                                            <input name="judul_kuis" type="text" placeholder="Masukkan Judul Kuis" class="form-control">
                                        </div>
                                          <div class="form-group">
                                            <label for="inputnama">Deskripsi</label>
                                            <input name="deskripsi_kuis" type="text" placeholder="Masukkan Desripsi Kuis" class="form-control">
                                        </div>
                                          <div class="form-group">
                                            <label for="inputnama">Mulai Mengerjakan</label>
                                            <input name="waktu_mulai" type="time" class="form-control">
                                        </div>
                                         <div class="form-group">
                                            <label for="inputnama">Selesai Mengerjakan</label>
                                            <input name="waktu_selesai" type="time" class="form-control">
                                        </div>
                                        <?php
                                            include '../koneksi/koneksi.php';
                                            $varsqlguru = mysqli_query($koneksi,"SELECT * FROM tb_guru WHERE id_guru='6'");
                                            $sqlguru = mysqli_fetch_array($varsqlguru);
                                        ?>
                                         <div class="form-group">
                                            <label for="inputnama">Pengajar</label>
                                            <input name="id_guru" type="hidden" readonly="true" class="form-control" value="<?php echo $sqlguru['id_guru']?>">
                                            <input name="nama_guru" type="text" readonly="true" class="form-control" value="<?php echo $sqlguru['nama_guru']?>">
                                        </div>
                        <div class="col-sm-6 pl-0">
                          <p class="text-right">
                            <button type="submit" name="btnSimpan" class="btn btn-space btn-primary">Simpan</button>
                            <button class="btn btn-space btn-secondary">Batal</button>
                          </p>
                        </div>
                    </div>
                </form>
                </div>
            </div>
                <!-- ============================================================== -->
<?php 
include "_partials/footer.php";
 ?>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="../assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="../assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="../assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="../assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="../assets/libs/js/dashboard-ecommerce.js"></script>
    <script src="../assets/vendor/datepicker1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $(".datepicker").datepicker({
                format : 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });
    </script>
</body>
 
</html>