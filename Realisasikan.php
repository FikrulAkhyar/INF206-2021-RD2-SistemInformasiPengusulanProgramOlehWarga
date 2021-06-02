<?php
//include 'server.php';
require_once "config.php";
$query = mysqli_query($conn, 'SELECT a.*, b.nama FROM usulan as a JOIN user as b ON a.id_user = b.id');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kirim Usulan</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
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
                        <a class="collapse-item font-weight-bold" style="color: black;" href="Usulan.php">Kirim Pengajuan</a>
                        <a class="collapse-item font-weight-bold" style="color: black;" href="#">Riwayat Pengajuan</a>
                    </div>
                </div>
            </li>

            <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>

            <!-- Nav Item - Peringkat Program Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed font-weight-bold" style="color: black;" href="peringkat_program.php">
                    <i class="far fa-star" style="color: #137F7F;"></i>
                    <span>Peringkat Program</span>
                </a>
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

                <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 font-weight-bold" style="color: #137F7F">Kelola Usulan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="button-realisasi text-right">
            <td><button class="btn border" type="button" id="realisasikan" data-toggle="modal" data-target="#exampleModalCenter" onclick="document.getElementById('realisasikan').style.color = 'black';" style="font-weight: bold; color:#137F7F">Realisasikan  <i class="fas fa-plus"></i></button>
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Realisasikan Program</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-4">
        <form method="POST" action="upload.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Judul Program</label>
    <input type="text" name="judul" class="form-control" id="exampleFormControlInput1" placeholder="Judul Program" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi Program</label>
    <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi Program" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Foto Program</label>
    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
  </div>
      </div>
      <div class="text-center">
        <button type="submit" name="upload" class="btn" style="background-color: #137F7F; color:white">Realisasikan</button>
      </div>
      <br>
    </form>
    </div>
  </div>
</div>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Nama Pengusul</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Vote</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['judul']; ?></td>
                                <td><?= $data['deskripsi']; ?></td>
                                <td id="rating" align="center"><?= $data['jumlah_vote']; ?><i class="fas fa-heart ml-1" style="color: red;"></i></td>                             </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="like-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Anda Melakukan Voting</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda Yakin Melakukan Voting?
                                </div>
                                <div class="modal-footer">
                                    <form>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Vote</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="js/kirimscript.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/vote.js"></script>
</body>

</html>