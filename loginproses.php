<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'config.php';

// Memasukkan input data ke dalam variabel
$nik = mysqli_real_escape_string($conn, $_POST['nik']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM user where nik='" . $nik . "'";
$data = mysqli_query($conn, $sql);
$cek = mysqli_num_rows($data);

if ($cek > 0) {
	$row = mysqli_fetch_row($data);
	$nik_user = $row[0];
	$pass_user = $row[5];
	$name_user = $row[2];
	$no_hp_user = $row[6];
	$id_status_user = $row[7];
	$id_user = $row[0];

	if (password_verify($password, $pass_user)) {

		$_SESSION["id"] = $id_user;
		$_SESSION["nik"] = $nik_user;
		$_SESSION["id_status"] = $id_status_user;
		$_SESSION["name"] = $name_user;
		$_SESSION["no_hp"] = $no_hp_user;


		header("location: dashboard");
	} else {
		$_SESSION['message'] = '<div class="alert alert-danger" role="alert">Login Gagal / Password Salah</div>';
		$_SESSION['passErr'] = "Password Salah";
		header("location: login");
	}
} else {
	$_SESSION['message'] = '<div class="alert alert-danger" role="alert">Login Gagal / Akun Belum Terdaftar</div>';
	$_SESSION['nikErr'] = "NIK tidak terdaftar";
	header("location: login");
}
