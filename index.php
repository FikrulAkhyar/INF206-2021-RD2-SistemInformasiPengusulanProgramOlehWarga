<?php
require_once "config.php";

$sql = mysqli_query($conn, "SELECT * FROM program");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SuggestBox</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
    </style>
</head>

<body id="page-top" style="background-image: url('img/home.png'); background-size: cover;">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgba(100, 162, 162); opacity:0.8; height:100px;" id="mainNav">
        <div class="container">
            <img src="img/logo.png">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="background-color: rgba(100, 162, 162, 0.8);">
                <ul class=" navbar-nav text-uppercase ml-auto" style="font-weight: bold;">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#program">Program</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#profiledesa">Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" style="background-image: url('img/bg-home.png');">
        <img src="img/logo-home.png" width="700px">
        <div class="masthead-heading text-uppercase"></div>
        <div>
            <a class="btn btn-xl text-uppercase js-scroll-trigger mx-3" style="background-color: #64A2A2;" href="login">Masuk</a>
            <a class="btn btn-xl text-uppercase js-scroll-trigger mx-3" style="background-color: #64A2A2;" href="signup">Daftar</a>
        </div>
    </header>

    <!-- profile desa-->
    <section class="page-section pb-0" id="profiledesa" style="background-color: white;">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">PROFILE</h2>
                <div class="m-auto" style="background-color: #F4C51E; width:250px; height:3px;"></div>
            </div>
            <br><br>
            <!--Grid row-->
            <div class="mb-3 rounded mx-auto d-block" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-7">

                        <div class="card-body">
                            <div class="text-center">
                                <h3 class="card-title">Desa Batoh</h3>
                                <br>
                                <p>Desa Batoh merupakan salah satu desa yang berada di Banda Aceh. Sebagai pusat pemerintahan tingkat Desa yang menjadi pusat kegiatan ekonomi, politik, sosial, dan budaya. Kantor Desa Batoh berada dalam satu lingkungan dengan Masjid Desa Batoh.
                                </p>
                                <button type="button" class="btn mb-2" style="background-color:#64A2A2; color:white;">Luas : 76.5 Ha</button>
                                <button type="button" class="btn mb-2" style="background-color:#64A2A2; color:white;">Provinsi : Aceh</button>
                                <button type="button" class="btn mb-2" style="background-color:#64A2A2; color:white;">Penduduk : 3086 Jiwa</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!--Google map-->
                        <div id="map-container-google-3" class="z-depth-1-half map-container-3">
                            <iframe src="https://maps.google.com/maps?q=Batoh&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; height:310px; width:100%;" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="rounded mx-auto d-block" style="width: 80%;">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <div class="card-body">
                            <h3 class="card-title pt-3 text-center">MISI</h3>
                            <div class="m-auto" style="background-color: #F4C51E; width:100px; height:3px;"></div>
                            <br><br>
                            <p class="text-center px-2 pb-5">Mempertahankan Pemerintahan Desa Yang Kuat Dan Masyarakat Maju</p>
                        </div>
                    </div>
                    <div class="col-md-5 mx-auto">
                        <div class="card-body">
                            <div>
                                <h3 class="card-title pt-3 text-center">VISI</h3>
                                <div class="m-auto" style="background-color: #F4C51E; width:100px; height:3px;"></div>
                                <br>
                                <div class="pb-5 p-auto">
                                    <i class="far fa-paper-plane"></i>
                                    <span>Meningkatkan Kinerja Pemerintah Desa</span><br><br>
                                    <i class="far fa-paper-plane"></i>
                                    <span>Mengembangkan Program Tridaya</span><br><br>
                                    <i class="far fa-paper-plane"></i>
                                    <span>Mengembangkan Jaringan Kerja Sama</span><br><br>
                                    <i class="far fa-paper-plane"></i>
                                    <span>Meningkatkan Potensi Di Setiap Bidang</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- End of Profile desa -->

    <!-- Program-->
    <section class="page-section bg-light" id="program">
        <div class="container">
            <div class="text-center">
                <h1 class="section-heading text-uppercase">PROGRAM</h1>
                <div class="m-auto" style="background-color: #F4C51E; width:250px; height:3px;"></div>
            </div>
            <br><br>
            <div class="row justify-content-center">
                <?php while ($program = mysqli_fetch_assoc($sql)) : ?>
                    <div class="col-lg-3 col-sm-6 mb-4 p-5 mx-2" style="background-image: linear-gradient(rgba(100, 162, 162, 0.9), rgba(100, 162, 162, 0)); border-radius: 20px;">
                        <div class="program-item">
                            <a class="program-link" data-toggle="modal" href="#programModal<?= $program["id"] ?>">
                                <div class="program-hover">
                                    <div class="program-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" style="border-radius: 20px;" src="img/program/<?= $program['image']; ?>" />
                            </a>
                            <div class="h5 pt-3">
                                <div class="program-caption-heading text-center"><?= $program['nama']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="program-modal modal fade" id="programModal<?= $program["id"] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog m-auto" style="width: 400px;">
                            <div class="modal-content p-5 m-5" style="background-color: rgba(100, 162, 162, 1)">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="modal-body">
                                            <img class="img-fluid d-block mx-auto" style="border-radius: 20px;" src="img/program/<?= $program['image']; ?>" />
                                            <h4 class="text-uppercase"><?= $program['nama']; ?></h4>
                                            <p><?= $program['keterangan']; ?></p>
                                            <div class="justify-content center pt-3">
                                                <button class="btn shadow rounded" data-dismiss="modal" type="button" style="background-color: #F4C51E;">
                                                    <i class=" fas fa-times mr-1"></i>
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- End of Program -->

    <!-- End of Program -->



    <!-- Team-->
    <!-- <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="" />
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="" />
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="" />
                        <h4>Diana Petersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted"></p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer-->
    <footer class="footer py-3 text-center" style="color: black; font-weight:bold; background-color: rgba(100, 162, 162, 0.9);">
        <span>Copyright © RD2 <?= date('Y'); ?></span>
    </footer>
    <!-- End of footer -->

    <!-- program Modals-->
    <?php while ($program = mysqli_fetch_assoc($sql)) : ?>
        <div class="program-modal modal fade" id="programModal<?= $program["id"] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog m-auto" style="width: 400px;">
                <div class="modal-content p-5 m-5" style="background-color: rgba(100, 162, 162, 1)">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="modal-body">
                                <img class="img-fluid d-block mx-auto" style="border-radius: 20px;" src="img/program/<?= $program['image']; ?>" />
                                <h4 class="text-uppercase"><?= $program['nama']; ?></h4>
                                <p><?= $program['keterangan']; ?></p>
                                <div class="justify-content center pt-3">
                                    <button class="btn shadow rounded" data-dismiss="modal" type="button" style="background-color: #F4C51E;">
                                        <i class=" fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

    <!-- End of Program Modal -->

    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <!-- Contact form JS-->
    <script src="mail/jqBootstrapValidation.js"></script>
    <script src="mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>