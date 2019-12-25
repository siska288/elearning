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
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="proses_user.php" method="POST">
                                <div class="form-group">
                                <label>Nama Pengguna<small class="text-muted"></small></label>
                                    <input type="text" name="nama_pengguna" class="form-control date-inputmask" id="date-mask" placeholder="">
                                </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="form-group">
                              <label>Username <small class="text-muted"></small></label>
                              <input type="text" name="username" class="form-control phone-inputmask" id="phone-mask" placeholder="">
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="form-group">
                             <label>Password <small class="text-muted"></small></label>
                             <input type="password" name="password" class="form-control xphone-inputmask" id="xphone-mask" placeholder="">
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="form-group">
                              <label>Level Pengguna<small class="text-muted"></small></label>
                              <select class="form-control" name="level" purchase-inputmask" id="purchase-mask" placeholder="">
                                <option>Pilih Level</option>
                                <option>Admin</option>
                                <option>Guru</option>
                                <option>Siswa</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-sm-6 pl-0">
                          <p class="text-right">
                            <button type="submit" name="btnSimpan" class="btn btn-space btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-space btn-secondary">Batal</button>
                          </p>
                        </div>
                    </div>
                </form>
                </div>
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
  
  <?php 
include "_partials/footer.php";
include "_partials/js.php";
 ?>