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
                            <h2 class="pageheader-title">Tambah Data Mapel</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="tambah_mapel.php" class="breadcrumb-link">Tambah Data Mapel</a></li>
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
                            <form action="proses_mapel.php" method="POST">
                                <div class="form-group">
                                    <label>Nama Mapel<small class="text-muted"></small></label>
                                    <input type="text" class="form-control date-inputmask" name="mapel" placeholder="">
                                </div>
                        </div>
                         <div class="card-body">
                                <div class="form-group">
                             <label>Kelas<small class="text-muted"></small></label>
                             <select class="form-control xphone-inputmask" name="kelas" placeholder="">
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
                             <select class="form-control xphone-inputmask" name="jurusan" placeholder="">
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
    
<?php 
include "_partials/footer.php";
include "_partials/js.php";
 ?>