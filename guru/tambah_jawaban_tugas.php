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
                            <h2 class="pageheader-title">Tambah Data Jawaban Tugas</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="tambah_jawaban_tugas.php" class="breadcrumb-link">Tambah Data Jawaban Tugas</a></li>
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
                            <h5 class="card-header">Input Data Jawaban Tugas</h5>
                                <div class="card-body">
                                    <form action="proses_jawaban_kuis.php" method="POST">
                                        <div class="form-group">
                                            <label for="inputnama">Id Jawaban Tugas</label>
                                            <input name="id_jawaban_tugas" type="text" placeholder="Masukkan Id Jawaban" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama">Nis</label>
                                            <input name="nis" type="text" placeholder="Masukkan Nis" class="form-control">
                                        </div>
                                          <div class="form-group">
                                            <label for="inputnama">Kelas</label>
                                            <input name="Kelas" type="text" placeholder="Masukkan Kelas" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama">Jurusan</label>
                                            <input name="jurusan" type="text" placeholder="Masukkan Jurusan" class="form-control">
                                        </div>
                                          <div class="form-group">
                                            <label for="inputnama">Mata Pelajaran</label>
                                            <input name="mapel" type="text" placeholder="Masukkan Nama Mapel" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama">Tugas</label>
                                            <input name="tugas" type="text" placeholder="Masukkan Tugas" class="form-control">
                                        </div>
                                          <div class="form-group">
                                            <label for="inputnama">File Tugas</label>
                                            <input name="file_tugas" type="text" placeholder="Masukkan File Tugas" class="form-control">
                                        </div>
                                         <div class="form-group">
                                            <label for="inputnama">Tipe File</label>
                                            <input name="tipe_file" type="text" placeholder="Masukkan Tipe File" class="form-control">
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