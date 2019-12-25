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
                            <h2 class="pageheader-title">Edit Data Siswa</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="data_siswa.php" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="edit_siswa.php" class="breadcrumb-link">Edit Data Siswa</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                 <?php
                  include "../koneksi/koneksi.php";
                  $varquery  = mysqli_query($koneksi,"SELECT * FROM tb_siswa WHERE nis='".$_GET['id']."'");
                  $varData   = mysqli_fetch_array($varquery);
                ?>
                <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                             <form action="edit_proses_siswa.php?id=<?php echo $_GET['id'] ?>" method="POST">
                            <h4>Input Text</h4>
                                <div class="form-group">
                                    <label>NIS<small class="text-muted"></small></label>
                                    <input type="text" class="form-control date-inputmask" id="date-mask" name="nis" placeholder="" value="<?php echo $varData['nis'] ?>">
                                </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="form-group">
                              <label>Nama Siswa<small class="text-muted"></small></label>
                              <input type="text" class="form-control phone-inputmask" id="phone-mask" name="nama_siswa" placeholder="" value="<?php echo $varData['nama_siswa'] ?>">
                            </div>
                        </div>
                        <div class="card-body border-top">
                           <div class="form-group">
                                            <label for="inputnama">Gender</label>
                                            <select name="jenis_kelamin" type="text" class="form-control">
                                                <option <?php if( $varData=='L'){echo "selected"; } ?> value='L'>L</option>
                                                <option <?php if( $varData=='P'){echo "selected"; } ?> value='P'>P</option>    
                                            </select>
                                        </div>
                        <div class="card-body border-top">
                            <div class="form-group">
                             <label>Kelas<small class="text-muted"></small></label>
                             <select class="form-control xphone-inputmask" id="xphone-mask" name="id_kelas" placeholder="">
                                <option>Kelas</option>
                                 <?php 
                                $varTampil = mysqli_query($koneksi, "SELECT * FROM tb_kelas ORDER BY id_kelas");
                                    while ($varDataCat = mysqli_fetch_array($varTampil)) {
                                        if ($varDataCat['id_kelas']== $varData['id_kelas']) {
                                            echo "<option selected value=$varDataCat[id_kelas]>$varDataCat[nama_kelas]</option>";
                                        } else {
                                            echo "<option value=$varDataCat[id_kelas]>$varDataCat[nama_kelas]</option>";
                                        }
                                        
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
                                <option>Jurusan</option>
                                 <?php 
                                $varTampil = mysqli_query($koneksi, "SELECT * FROM tb_jurusan ORDER BY id_jurusan");
                                    while ($varDataCat = mysqli_fetch_array($varTampil)) {
                                        if ($varDataCat['id_jurusan']== $varData['id_jurusan']) {
                                            echo "<option selected value=$varDataCat[id_jurusan]>$varDataCat[nama_jurusan]</option>";
                                        } else {
                                            echo "<option value=$varDataCat[id_jurusan]>$varDataCat[nama_jurusan]</option>";
                                        }
                                        
                                    }
                                     ?> 
                                </option>
                            </select>
                            </div>
                        </div>
                         <div class="card-body border-top">
                            <div class="form-group">
                         <label for="inputEmail">Status</label>
                         <select name="status_pengguna" type="text" class="form-control">
                         <option <?php if( $varData=='siswa'){echo "selected"; } ?> value='siswa'>siswa</option>
                         </select>
                        </div>
                        </div>
                        <div class="col-sm-6 pl-0">
                          <p class="text-right">
                            <button type="submit" name="btnEdit" class="btn btn-space btn-primary">Simpan</button>
                            <button class="btn btn-space btn-secondary">Batal</button>
                          </p>
                        </div>
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