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
                            <h2 class="pageheader-title">Edit Data Jurusan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="data_jurusan.php" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="edit_jurusan.php" class="breadcrumb-link">Edit Data Jurusan</a></li>
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
                  $varquery  = mysqli_query($koneksi,"SELECT * FROM tb_jurusan WHERE id_jurusan='".$_GET['id']."'");
                  $varData   = mysqli_fetch_array($varquery);
                ?>
               <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="proses_jurusan.php" method="POST">
                                <div class="form-group">
                                    <label>Nama Jurusan<small class="text-muted"></small></label>
                                    <input type="text" class="form-control date-inputmask" name="jurusan" placeholder="" value="<?php echo $varData['nama_jurusan'] ?>">
                                </div> 
                        </div>
                      
                        <div class="col-sm-6 pl-0">
                          <p class="text-right">
                            <button type="submit" class="btn btn-space btn-primary" name="btnSimpan">Simpan</button>
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
include "_partials/js.php";
 ?>