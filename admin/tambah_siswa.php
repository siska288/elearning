<?php
 include '../koneksi/koneksi.php';
?>
<?php 
include "_partials/footer.php";
include "_partials/js.php";
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
                            <h2 class="pageheader-title">Tambah Data Siswa</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="tambah_siswa.php" class="breadcrumb-link">Tambah Data Siswa</a></li>
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
                        <div class="card-body">
                             <form action="proses_siswa.php" method="POST">
                            <h4>Input Text</h4>
                                <div class="form-group">
                                    <label>NIS<small class="text-muted"></small></label>
                                    <input type="text" class="form-control date-inputmask" id="date-mask" name="nis" placeholder="">
                                </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="form-group">
                              <label>Nama Siswa<small class="text-muted"></small></label>
                              <input type="text" class="form-control phone-inputmask" id="phone-mask" name="nama_siswa" placeholder="">
                            </div>
                        </div>
                          <div class="card-body border-top">
                            <div class="form-group">
                             <label>Jenis Kelamin<small class="text-muted"></small></label>
                             <select class="form-control xphone-inputmask" id="xphone-mask" name="jenis_kelamin"  placeholder="">
                                <option value="">Pilih Gender</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="form-group">
                             <label>Kelas<small class="text-muted"></small></label>
                             <select class="form-control xphone-inputmask" id="xphone-mask" name="id_kelas" placeholder="">
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
                        </div>
                        <div class="card-body">
                         <div class="form-group">
                             <label>Jurusan<small class="text-muted"></small></label>
                             <select class="form-control xphone-inputmask" name="id_jurusan" placeholder="">
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
                        </div>
                         <div class="card-body border-top">
                            <div class="form-group">
                             <label>Status<small class="text-muted"></small></label>
                             <select class="form-control xphone-inputmask" id="xphone-mask" name="status_pengguna" placeholder="">
                                <option>pilih status</option>
                                <option>siswa</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-6 pl-0">
                          <p class="text-right">
                            <button type="submit" name="btnSimpan" class="btn btn-space btn-primary">Simpan</button>
                            <button class="btn btn-space btn-secondary">Batal</button>
                          </p>
                        </div>
                    </div>
                </div>
            </form>
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