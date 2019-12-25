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
                            <h2 class="pageheader-title">Edit Data Tugas</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="edit_tugas.php" class="breadcrumb-link">Edit Data Tugas</a></li>
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
                            <h5 class="card-header">Edit Data Tugas</h5>
                                <div class="card-body">
                                    <?php
                                            include '../koneksi/koneksi.php';
                                            $varsql= mysqli_query($koneksi,"SELECT tb_tugas.id_tugas, tb_guru.nama_guru, tb_tugas.id_kelas, tb_tugas.id_jurusan , tb_mapel.nama_mapel, tb_tugas.judul, tb_tugas.deskripsi_tugas, tb_tugas.tanggal_upload, tb_tugas.batas_pengumpulan FROM tb_tugas JOIN tb_guru ON tb_guru.id_guru=tb_tugas.id_guru JOIN tb_mapel ON tb_mapel.id_mapel=tb_tugas.id_mapel WHERE id_tugas='".$_GET['id']."'");
                                            $varData = mysqli_fetch_array($varsql);
                                        ?>
                                    <form action="proses_edit_tugas.php?id=<?php echo $_GET['id'] ?>" method="POST">
                                        <div class="form-group">
                                            <label for="inputnama">Pelajaran</label>
                                            <input name="id_mapel" readonly="true" type="hidden" class="form-control" value="<?php echo $varData['id_mapel'] ?>">
                                            <input name="nama_mapel" readonly="true" type="text" class="form-control"  value="<?php echo $varData['nama_mapel'] ?>">
                                        </div>
                                         <div class="form-group">
                                            <label for="inputnama">Kelas</label>
                                            <select name="kelas" class="form-control">
                                                <option>Pilih Kelas</option>
                                                <?php
                                                    include"../koneksi/koneksi.php";
                                                    $kelas = mysqli_query($koneksi,"SELECT * FROM tb_kelas");
                                                    while ($tampil = mysqli_fetch_array($kelas)) {
                                                    if ($tampil['id_kelas']==$varData['id_kelas']) {
                                                        echo "<option selected value=$tampil[id_kelas]>$tampil[nama_kelas]</option>";
                                                    }else{
                                                        echo "<option value=$tampil[id_kelas]>$tampil[nama_kelas]</option>";
                                                    }
                                                  }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama">Jurusan</label>
                                            <select name="jurusan" class="form-control">
                                              <option>Pilih Jurusan</option>
                                                <?php
                                                    include"../koneksi/koneksi.php";
                                                    $kelas = mysqli_query($koneksi,"SELECT * FROM tb_jurusan");
                                                    while ($tampil = mysqli_fetch_array($kelas)) {
                                                    if ($tampil['id_jurusan']==$varData['id_jurusan']) {
                                                        echo "<option selected value=$tampil[id_jurusan]>$tampil[nama_jurusan]</option>";
                                                    }else{
                                                        echo "<option value=$tampil[id_jurusan]>$tampil[nama_jurusan]</option>";
                                                    }
                                                  }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama">Judul</label>
                                            <input name="judul" type="text" class="form-control" value="<?php echo $varData['judul'] ?>">
                                        </div>
                                          <div class="form-group">
                                            <label for="inputnama">Deskripsi</label>
                                            <input name="deskripsi" type="text" value="<?php echo $varData['deskripsi_tugas'] ?>" class="form-control">
                                        </div>
                                          <div class="form-group">
                                            <label for="inputnama">Batas Pengumpulan</label>
                                              <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                              </div>
                                              <input placeholder="Masukkan Batas Tugas" type="text" class="form-control datepicker" name="batastugas" value="<?php echo $varData['batas_pengumpulan'] ?>">
                                            </div>
                                        </div>
                
                                         <div class="form-group">
                                            <label for="inputnama">Pengajar</label>
                                            <input name="id_guru" type="hidden" readonly="true" class="form-control" value="<?php echo $varData['id_guru']?>">
                                            <input name="nama_guru" type="text" readonly="true" class="form-control" value="<?php echo $varData['nama_guru']?>">
                                        </div>
                        <div class="col-sm-6 pl-0">
                          <p class="text-right">
                            <button type="submit" name="btnEdit" class="btn btn-space btn-primary">Edit</button>
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