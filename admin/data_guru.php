<?php
 include '../koneksi/koneksi.php';
?>
<?php 
include "_partials/header.php";
include "_partials/sidebar.php";
 ?>
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
                            <h2 class="pageheader-title">Data Guru</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Guru</a></li>
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
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                             <a href="tambah_guru.php" class="card-header"><button>Tambah Data Guru</button></a>
                             <form>
                                <input style="float: right;" type="text" name="cari" placeholder="Cari Data Guru">
                                <input style="float: right; margin-left: 10px;" type="submit" name="btncari" value="Cari">
                             </form> 
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Id Guru</th>
                                                <th>NIP</th>
                                                <th>Nama Guru</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         include"../koneksi/koneksi.php";
                                         $Querytampil = mysqli_query($koneksi,"SELECT * FROM tb_guru");
                                         while ($tampiltabel = mysqli_fetch_array($Querytampil)) {
                                             $varidguru           = $tampiltabel['id_guru'];
                                             $varNIP              = $tampiltabel['nip'];
                                             $varnamaguru         = $tampiltabel['nama_guru'];
                                             $varjeniskelamin     = $tampiltabel['jenis_kelamin'];
                                             $varstatus            = $tampiltabel['status'];
                                        ?>
                                        <tr>
                                            <td><?php echo $varidguru ?></td>
                                            <td><?php echo $varNIP ?></td>
                                            <td><?php echo $varnamaguru ?></td>
                                            <td><?php echo $varjeniskelamin ?></td>
                                            <td><?php echo $varstatus ?></td>
                                            <td>
                                                <a href="edit_guru.php?id=<?php echo $varidguru ?>">Edit</a> |
                                                <a href="delete_guru.php?id=<?php echo $varidguru ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                         <tfoot>
                                            <?php
                                            }
                                            ?>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
<?php 
include "_partials/footer.php";
include "_partials/js.php";
 ?>