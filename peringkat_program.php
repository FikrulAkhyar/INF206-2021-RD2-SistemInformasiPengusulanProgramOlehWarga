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

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 font-weight-bold" style="color: #137F7F">Peringkat Program</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <?php if ($_SESSION["id_status"] == 1) { ?>
                <div class="button-realisasi text-right">
                    <td><button class="btn border" type="button" id="realisasikan" data-toggle="modal" data-target="#realisasi" onclick="document.getElementById('realisasikan').style.color = 'black';" style="font-weight: bold; color:#137F7F">Realisasikan <i class="fas fa-plus"></i></button>
                </div>
                <br>