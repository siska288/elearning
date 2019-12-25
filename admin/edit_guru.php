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
                            <h2 class="pageheader-title">Edit Data Guru</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="data_guru.php" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="edit_guru.php" class="breadcrumb-link">Tambah Data Guru</a></li>
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
                  $varquery  = mysqli_query($koneksi,"SELECT * FROM tb_guru WHERE id_guru='".$_GET['id']."'");
                  $varData   = mysqli_fetch_array($varquery);
                ?>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Edit Data Guru</h5>
                                <div class="card-body">
                                    <form action="proses_guru.php" method="POST">
                                        <div class="form-group">
                                            <label for="inputnama">NIP</label>
                                            <input name="nip_guru" type="text" placeholder="Masukkan Nama Guru" class="form-control" value="<?php echo $varData['nip'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama">Nama Guru</label>
                                            <input name="nama_guru" type="text" placeholder="Masukkan Nama Guru" class="form-control" value="<?php echo $varData['nama_guru'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama">Gender</label>
                                            <select name="jenis_kelamin" type="text" class="form-control">
                                                <option <?php if( $varData=='L'){echo "selected"; } ?> value='L'>L</option>
                                                <option <?php if( $varData=='P'){echo "selected"; } ?> value='P'>P</option>    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Status</label>
                                            <select name="status_pengguna" type="text" class="form-control">
                                              <option <?php if( $varData=='guru'){echo "selected"; } ?> value='guru'>guru</option>
                                            </select>
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
include "footer.php";
 ?>
        </div>
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