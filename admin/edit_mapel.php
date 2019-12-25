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
                            <h2 class="pageheader-title">Edit Data Mapel</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="data_mapel.php" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="edit_mapel.php" class="breadcrumb-link">Edit Data Mapel</a></li>
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
                  $varquery  = mysqli_query($koneksi,"SELECT * FROM tb_mapel WHERE id_mapel='".$_GET['id']."'");
                  $varData   = mysqli_fetch_array($varquery);
                ?>
                <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="edit_proses_mapel.php?id=<?php echo $_GET['id'] ?>" method="POST">
                                <div class="form-group">
                                    <label>Nama Mapel<small class="text-muted"></small></label>
                                    <input type="text" class="form-control date-inputmask" name="mapel" placeholder="" value="<?php echo $varData['nama_mapel'] ?>">
                                </div>
                        </div>
                         <div class="card-body">
                                <div class="form-group">
                             <label>Kelas<small class="text-muted"></small></label>
                             <select class="form-control xphone-inputmask" name="kelas" placeholder="">
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
                            </select>
                            </div>
                        </div>
                        <div class="card-body">
                         <div class="form-group">
                             <label>Jurusan<small class="text-muted"></small></label>
                             <select class="form-control xphone-inputmask" name="jurusan" placeholder="">
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

                        <div class="col-sm-6 pl-0">
                          <p class="text-right">
                            <button type="submit" class="btn btn-space btn-primary" name="btnEdit">Edit</button>
                            <button type="reset" class="btn btn-space btn-secondary">Batal</button>
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