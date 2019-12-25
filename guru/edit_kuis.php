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
                            <h2 class="pageheader-title">Edit Data Kuis</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="tambah_guru.php" class="breadcrumb-link">Edit Data Kuis</a></li>
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
                            <h5 class="card-header">Edit Data Kuis</h5>
                                <div class="card-body">
                                    <?php
                                            include '../koneksi/koneksi.php';
                                            $varsql= mysqli_query($koneksi,"SELECT tb_kuis.id_kuis,tb_guru.nama_guru,tb_kuis.id_kelas, tb_kuis.id_jurusan, tb_mapel.nama_mapel, tb_kuis.judul, tb_kuis.deskripsi_kuis, tb_kuis.tanggal_upload, tb_kuis.mulai_mengerjakan, tb_kuis.selesai_mengerjakan FROM tb_kuis JOIN tb_mapel ON tb_mapel.id_mapel=tb_kuis.id_mapel JOIN tb_guru ON tb_guru.id_guru=tb_kuis.id_guru  WHERE id_kuis='".$_GET['id']."'");
                                            $varData = mysqli_fetch_array($varsql);
                                        ?>
                                    <form action="proses_edit_kuis.php?id=<?php echo $_GET['id'] ?>" method="POST">
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
                                            <input name="judul" type="text" placeholder="Masukkan Nama Guru" class="form-control" value="<?php  echo $varData['judul'] ?>">
                                        </div>
                                          <div class="form-group">
                                            <label for="inputnama">Deskripsi</label>
                                            <input type="text" name="deskripsi" class="form-control" value="<?php echo $varData['deskripsi_kuis'] ?>">
                                        </div>
                                          <div class="form-group">
                                            <label for="inputnama">Mulai Mengerjakan</label>
                                            <input name="waktu_mulai" type="time" class="form-control" value="<?php echo $varData['mulai_mengerjakan'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama">Selesai Mengerjakan</label>
                                            <input name="waktu_selesai" type="time" class="form-control" value="<?php echo $varData['selesai_mengerjakan'] ?>">
                                        </div>
                        <div class="col-sm-6 pl-0">
                          <p class="text-right">
                            <button type="submit" name="btnEdit" class="btn btn-space btn-primary">Edit</button>
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