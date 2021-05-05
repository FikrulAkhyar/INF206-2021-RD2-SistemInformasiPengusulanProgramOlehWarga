<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../config/config.php';
require '../config/koneksi.php';

// Memasukkan input data ke dalam variabel
$nik = $_POST['nik'];
$password = $_POST['password'];

$sql="select * from user where nik='".$nik."'";
$data = mysqli_query($koneksi, $sql);
$cek = mysqli_num_rows($data);

if ($cek > 0){
	$row=mysqli_fetch_row($data);
	$nik_user = $row[0];
	$pass_user = $row[5];
	$name_user = $row[2];
	$id_status_user = $row[7];
	$id_user = $row[0];

	if (password_verify($password, $pass_user)) {
		session_start();

        $_SESSION["id"] = $id_user;
		$_SESSION["nik"] = $nik_user;
		$_SESSION["id_status"] = $id_status_user;
		$_SESSION["name"] = $name_user;

		$message = '<div class="alert alert-danger" role="alert">Login Sukses/div>';

        if ($id_status_user == 1) {
            header("location: ".base_url .'/admin?message='.$message);
        } else {
            header("location: ".base_url .'/user?message='.$message);
        }
    } else {
        $message = '<div class="alert alert-danger" role="alert">Login Gagal / Password Salah</div>';
		header("location: ".base_url .'/login?message='.$message);
    }
} else {
	$message = '<div class="alert alert-danger" role="alert">Login Gagal / NIK Salah</div>';
	header("location: ".base_url .'/login?message='.$message);
}
?>