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
    $sql = 'SELECT judul FROM usulan ORDER BY jumlah_vote DESC LIMIT 3';

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


    <?php include_once "footer.php"; ?>