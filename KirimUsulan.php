<?php 
include "config.php";

$id_user = $_SESSION["id"]; 
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$vote = 0;


if(mysqli_query($conn, "INSERT INTO usulan VALUES('', '$id_user','$judul', '$deskripsi', '$vote')")) { 
    $popup = "Success";
    $_SESSION['popup'] = $popup;
} else {
    $popup = "Warning";
    $_SESSION['popup'] = $popup;
}