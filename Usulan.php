<?php
require_once "config.php";
if (!$_SESSION["id"]) {
    header("Location: login");
    exit();
}

include_once "header.php";
include_once "sidebar.php";
include_once "topbar.php";
?>

<!-- Begin Page Content -->
<div class="container-fluid mb-5">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 font-weight-bold" style="color: #137F7F">Kirim Usulan</h1>

    <div class="m-auto border border-primary" style="width: 500px; height: 700px; background-color: rgba(196, 196, 196, 0.2); border-radius: 44px;">
        <div class="m-auto py-5 text-center" style="height: 100px;">
            <h3 style="color: #137F7F; font-weight:bold;">Pengajuan Usulan Oleh Warga</h3>
        </div>
        <div class="m-auto" style="width: 350px; height: 400px;">

            <form method="post" action="KirimUsulan.php">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input class="form-control border border-info" type="text" id="nama" name="nama" value="<?= $_SESSION["name"]; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nohp">No HP</label>
                    <input class="form-control border border-info" id="nohp" type="text" name="nohp" value="<?= $_SESSION["no_hp"]; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control border border-info" id="judul" name="judul" placeholder="Masukkan Judul Program..." required>

                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control border border-info" id="deskripsi" name="deskripsi" rows="7" required></textarea>

                </div>
                <button type="submit" class="btn btn-warning btn-user btn-block mx-auto mt-5" id="submit" style="width: 100px; color: black;">
                    Kirim
                </button>
            </form>
        </div>
    </div>
    <?php
    if (isset($_SESSION['popup'])) { ?>
        <div class="popup" id="popup" data-popup="<?= $_SESSION['popup']; ?>"></div>
    <?php } else { ?>
        <div class="popup" id="popup" data-popup=""></div>
    <?php } ?>
    <?php unset($_SESSION['popup']); ?>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->