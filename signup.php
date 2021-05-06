<?php
session_start();
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

</head>

<body>
    <!-- Outer Row -->
    <div class="row justify-content-center p-0 m-0">

        <div class="col m-0 p-0">

            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 pb-4">
                            <div class="p-4">
                                <div class="text-left mb-5">
                                    <a href="#"><img src="img/logo.png"></a>
                                </div>
                                <div style="color: #137F7F; padding-left: 75px; padding-right: 75px;">
                                    <h3 style="font-weight:750;">Sistem Pengusulan Program Desa Batoh</h3>
                                </div>
                                <div class="text-dark mb-4" style="padding-left: 75px;">
                                    <p>Welcome back! Please Signup.</p>
                                </div>


                                <div style="padding-left: 75px; padding-right: 75px;">
                                    <?php if (isset($_SESSION['flashdata'])) {
                                        echo $_SESSION['flashdata'];
                                    } ?>
                                    <form class="user" method="post" action="register">
                                        <div class="form-group">
                                            <input type="tel" class="form-control form-control-user <?= (isset($_SESSION['nikErr'])) ? 'is-invalid' : 'is_valid' ?>" id="nik" name="nik" placeholder="NIK" required>
                                            <div class="invalid-feedback"><?= $_SESSION['nikErr']; ?></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="Nomor Hp" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user <?= (isset($_SESSION['passErr'])) ? 'is-invalid' : 'is_valid' ?>" id="password1" name="password1" placeholder="Password">
                                                <div class="invalid-feedback"><?= $_SESSION['passErr'];; ?></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-warning font-weight-bold btn-user btn-block" style="color: black;">
                                                Register
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <a class="small font-weight-bold" style="color:#137F7F" href="login">Sudah Punya Akun? Login</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" style="background-image: url('img/bg-log.png'); background-size:cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php session_destroy(); ?>

    <!-- Footer-->
    <footer class="footer py-2 text-center" style="color: black; font-weight:bold; background-color: rgba(100, 162, 162, 0.9);">
        <span>Copyright © RD2 <?= date('Y'); ?></span>
    </footer>
    <!-- End of footer -->

    <!-- Bootstrap core JavaScript-->
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

</body>

</html>