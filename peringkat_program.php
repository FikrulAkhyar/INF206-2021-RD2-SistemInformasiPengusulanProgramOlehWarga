<?php
include 'server.php';
if (!$_SESSION["id"]) {
    header("Location: login");
    exit();
}

include 'header.php';
include_once "sidebar.php";
include_once "topbar.php";

$query = mysqli_query($conn, 'SELECT a.*, b.nama FROM usulan as a JOIN user as b ON a.id_user = b.id order by a.jumlah_vote desc');
?>