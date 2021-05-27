<?php
session_start();
require_once "config.php";

$sql = mysqli_query($conn, "SELECT * FROM user");
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
                        <a class="collapse-item font-weight-bold" style="color: black;" href="lihat_usulan">Kelola Usulan</a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User Admin</span>
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
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 font-weight-bold" style="color: #137F7F">Kelola Warga</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr align="center">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
                                        $sql = mysqli_query($conn, "SELECT * FROM user ORDER BY id DESC") or die(mysqli_error($conn));
                                        //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                                        if (mysqli_num_rows($sql) > 0) {
                                            //membuat variabel $no untuk menyimpan nomor urut
                                            $no = 1;
                                            //melakukan perulangan while dengan dari dari query $sql
                                            while ($warga = mysqli_fetch_assoc($sql)) {
                                                //menampilkan data perulangan
                                                echo '
                                            <tr align="center">
                                                <td>' . $no . '</td>
                                                <td>' . $warga['nama'] . '</td>
                                                <td>' . $warga['nik'] . '</td>
                                                <td align="center">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail">Detail</button>
                                                    <a href="delete.php?id=' . $warga['id'] . '" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><button type="button" class="btn btn-danger">Delete</button></a>
                                                </td>
                                            </tr>
                                            ';
                                                echo '<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLongTitle">Detail Warga</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body mx-5">
                                                <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <input type="text" class="form-control" id="nik" value="' . $warga['nik'] . '" readonly>
                                              </div>
                                                <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama" value="' . $warga['nama'] . '" readonly>
                                              </div>
                                              <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" id="email" value="' . $warga['email'] . '" readonly>
                                              </div>
                                              <div class="form-group">
                                                <label for="no_hp">Nomor HP</label>
                                                <input type="text" class="form-control" id="no_hp" value="' . $warga['no_hp'] . '" readonly>
                                              </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                                $no++;
                                            }
                                            //jika query menghasilkan nilai 0
                                        } else {
                                            echo '
                                        <tr>
                                            <td colspan="6">Tidak ada data.</td>
                                        </tr>
                                        ';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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