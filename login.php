<?php require '../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

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
                                    <a href="<?= base_url ?>"><img src="<?= base_url .'/assets/img/logo.png'; ?>"></a>
                                </div>
                                <div style="color: #137F7F; padding-left: 75px; padding-right: 75px;">
                                    <h3 style="font-weight:750;">Sistem Pengusulan Program Desa Batoh</h3>
                                </div>
                                <div class="text-dark mb-4" style="padding-left: 75px;">
                                    <p>Welcome back! Please login to your account.</p>
                                </div>


                                <div style="padding-left: 75px; padding-right: 75px;">
                                    <?php if (!empty($_GET['message'])) { echo $_GET['message']; } ?>

                                    <form class="user" method="post" action="<?= base_url .'/login/proses.php'; ?>">
                                        <div class="form-group">
                                            <input type="tel" class="form-control form-control-user" id="nik" name="nik" placeholder="NIK" value="">
                                           <!--  <?//= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                           <!--  <?//= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                        </div>
                                        <div class="form-group" style="display: flex; justify-content:space-between;">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label  font-weight-bold" for="customCheck" style="color: #137F7F">Remember
                                                    Me</label>
                                            </div>
                                            <div class="text-right" style="flex-wrap: wrap;">
                                                <a class="small font-weight-bold" style="color: #137F7F" href="#">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-warning font-weight-bold btn-user px-5 btn-block" style="color: black;">
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <hr>

                                <div class="text-center ">
                                    <a class="small font-weight-bold" style="color: #137F7F" href="<?= base_url .'/registration'; ?>">Buat Akun</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" style="background-image: url('<?= base_url .'/assets/img/bg-log.png'; ?>'); background-size:600px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="footer py-2 text-center" style="color: black; font-weight:bold; background-color: rgba(100, 162, 162, 0.9);">
        <span>Copyright © RD2 <?= date('Y'); ?></span>
    </footer>
    <!-- End of footer -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url ?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>