<?php
require_once "config.php";
if (!$_SESSION["id"]) {
    header("Location: login");
    exit();
}

include_once "header.php";
include_once "sidebar.php";
include_once "topbar.php";

$countUser = mysqli_query($conn, "SELECT * FROM user");
$countProgram = mysqli_query($conn, "SELECT * FROM program");
$countUsulan = mysqli_query($conn, "SELECT * FROM usulan");
$jumlah_user = mysqli_num_rows($countUser);
$jumlah_program = mysqli_num_rows($countProgram);
$jumlah_usulan = mysqli_num_rows($countUsulan);

?>
<!-- Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 font-weight-bold" style="color: #137F7F">Menu Utama</h1>
    <div class="row justify-content-center">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Warga</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_user ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users" style="font-size: xx-large;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Usulan Program</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_usulan ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hourglass-half" style="font-size: xx-large;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Program Terlaksana</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_program ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-check" style="font-size: xx-large;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Peringkat -->
    <div class="card text-center pt-5 pb-2 border-0" style="background-color:inherit">
        <div>
            <h4 class="font-weight-bold" style="color: #137F7F;">TOP 3 USULAN PROGRAM</h4>
        </div>
    </div>
    <?php
    $sql = 'select judul from usulan order by jumlah_vote desc limit 3';

    $query = mysqli_query($conn, $sql);
    ?>
    <div class="card px-3 border-0 m-auto" style="color: black; max-width:500px;">
        <div class="h5 px-3 py-3" style="background-color: #137F7F; color: white; border: 1px solid #137F7F; border-radius: 10px;">
            <i class="fas fa-medal" style="color: gold;"></i>
            <span>
                <?php $row = mysqli_fetch_array($query);
                echo $row['judul']; ?>
            </span>
        </div>
        <div class="h5 px-3 py-3" style="background-color: white; border: 1px solid #137F7F; border-radius: 10px;">
            <i class="fas fa-medal" style="color: silver;"></i>
            <span><?php $row = mysqli_fetch_array($query);
                    echo $row['judul']; ?></span>
        </div>
        <div class="h5 px-3 py-3 mb-5" style="background-color: white; border: 1px solid #137F7F; border-radius: 10px;">
            <i class="fas fa-medal" style="color: brown;"></i>
            <span><?php $row = mysqli_fetch_array($query);
                    echo $row['judul']; ?></span>
        </div>
    </div>

    <!-- End of Content -->

    <!-- Footer-->
    <footer class="footer py-2 text-center" style="color: black; font-weight:bold; background-color: rgba(100, 162, 162, 0.9);">
        <span>Copyright © RD2 <?= date('Y'); ?></span>
    </footer>
    <!-- End of footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Tekan Logout Untuk Keluar</div>
            <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn" style="background-color: rgba(100, 162, 162, 0.9); color:white" href="logout">Logout</a>
            </div>
        </div>
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Bootstrap core JavaScript-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="js/kirimscript.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/datatables.js"></script>
<script src="js/kirimscript.js"></script>
</body>

</html>