<?php 
include "config.php";

$id_user = 22; 
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$vote = 0;


if(mysqli_query($conn, "INSERT INTO usulan VALUES('', '$id_user','$judul', '$deskripsi', '$vote')")) { 
    echo"<script>alert('OKEE')</script>";
} else {
    echo"<script>alert('XXXX')</script>";
    die("Koneksi Gagal : " . mysqli_error($conn));
}

header("location:Usulan.php");
?>
