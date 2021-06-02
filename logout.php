<?php
<<<<<<< HEAD
=======
session_start();
>>>>>>> 1908107010060
session_destroy();
session_start();

$_SESSION['message'] = '<div class="alert alert-success" role="alert">Berhasil Logout</div>';
header("Location: login");
