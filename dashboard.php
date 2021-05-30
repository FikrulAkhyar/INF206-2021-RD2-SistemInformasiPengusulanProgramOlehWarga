<?php
session_start();
require_once "config.php";
$countUser = mysqli_query($conn, "SELECT * FROM user");
$countProgram = mysqli_query($conn, "SELECT * FROM program");
$countUsulan = mysqli_query($conn, "SELECT * FROM usulan");

$jumlah_user = mysqli_num_rows($countUser);
$jumlah_program = mysqli_num_rows($countProgram);
$jumlah_usulan = mysqli_num_rows($countUsulan);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SuggestBox</title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php if ($_SESSION["id_status"] == 1) : ?>
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-white sidebar sidebar-dark accordion" id="accordionSidebar" style="border: 1px solid #137F7F;">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <img src="img/logo.png" width="90%;">
                </a>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" style="color: black;" href="#">
                        <i class="fas fa-home" style="color: #137F7F;"></i>
                        <span>Menu Utama</span></a>
                </li>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>

                <!-- Nav Item - Pengajuan Program Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed font-weight-bold" style="color: black; " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="far fa-paper-plane" style="color: #137F7F;"></i>
                        <span>Menu Admin</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item font-weight-bold" style="color: black;" href="kelola_warga">Kelola Warga</a>
                            <a class="collapse-item font-weight-bold" style="color: black;" href="#">Kelola Usulan</a>
                        </div>
                    </div>
                </li>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>


                <!-- Nav Item - Logout Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed font-weight-bold" style="color: black;" href="logout">
                        <i class="fas fa-sign-out-alt" style="color: #137F7F;"></i>
                        <span>Logout</span>
                    </a>
                </li>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" style="background-color: #137F7F;" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->
        <?php else : ?>
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-white sidebar sidebar-dark accordion" id="accordionSidebar" style="border: 1px solid #137F7F;">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <img src="img/logo.png" width="90%;">
                </a>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" style="color: black;" href="#">
                        <i class="fas fa-home" style="color: #137F7F;"></i>
                        <span>Menu Utama</span></a>
                </li>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>

                <!-- Nav Item - Pengajuan Program Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed font-weight-bold" style="color: black; " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="far fa-paper-plane" style="color: #137F7F;"></i>
                        <span>Pengajuan Program</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item font-weight-bold" style="color: black;" href="Usulan">Kirim Pengajuan</a>
                            <a class="collapse-item font-weight-bold" style="color: black;" href="riwayat-usulan">Riwayat Pengajuan</a>
                        </div>
                    </div>
                </li>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" style="color: black;" href="#">
                        <i class="fas fa-home" style="color: #137F7F;"></i>
                        <span>Peringkat Program</span></a>
                </li>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>


                <!-- Nav Item - Logout Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed font-weight-bold" style="color: black;" href="#">
                        <i class="fas fa-sign-out-alt" style="color: #137F7F;"></i>
                        <span>Logout</span>
                    </a>
                </li>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" style="background-color: #137F7F;" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->
        <?php endif; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="border-bottom: 1px solid #137F7F;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION["name"]; ?></span>
                                <img class="img-profile rounded-circle" src="img/profile/default.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Content -->
                <div class="container-fluid">

                    <!-- Footer-->
                    <footer class="footer py-2 text-center" style="color: black; font-weight:bold; background-color: rgba(100, 162, 162, 0.9);">
                        <span>Copyright © RD2 <?= date('Y'); ?></span>
                    </footer>
                    <!-- End of footer -->

                </div>
                <!-- End of Content Wrapper -->