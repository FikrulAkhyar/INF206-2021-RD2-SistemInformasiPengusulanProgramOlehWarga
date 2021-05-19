<?php
require_once "config.php";
session_start();

$nik = htmlspecialchars($_POST["nik"]);
$cekquery = mysqli_query($conn, "SELECT * FROM user where nik = '$nik'");
$cekuser = mysqli_fetch_assoc($cekquery);

if ($_POST["nik"] != $cekuser["nik"]) {
    if ($_POST["password1"] == $_POST["password2"]) {
        $nama = htmlspecialchars($_POST["nama"]);
        $email = htmlspecialchars($_POST["email"]);
        $image = "default.jpg";
<<<<<<< HEAD
        $password = password_hash($_POST["nik"], PASSWORD_DEFAULT);
=======
        $password = password_hash($_POST["password1"], PASSWORD_DEFAULT);
>>>>>>> main
        $no_hp = $_POST["no_hp"];
        $id_status = 2;
        $date_created = $date . " " . $time;

        $insert = "INSERT INTO user VALUES ('', '$nik', '$nama', '$email', '$image', '$password', '$no_hp', '$id_status', '$date_created')";
        if (mysqli_query($conn, $insert)) {
            $flashdata = '<div class="alert alert-success" role="alert">Pendaftaran Akun berhasil, Silahkan Login</div>';
            $_SESSION['flashdata'] = $flashdata;
        } else {
            echo "<script>alert('Gagal')</script>";
        }
    } else {
        $_SESSION['passErr'] = "Password Tidak Sama";
    }
} else {
    $_SESSION['nikErr'] = "NIK telah terdaftar";
}

header("Location:signup");
