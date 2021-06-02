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
                <!-- Modal -->
                <div class="modal fade" id="realisasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="exampleModalLongTitle">Realisasikan Program</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-4">
                                <form method="POST" action="upload.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Judul Program</label>
                                        <input type="text" name="judul" class="form-control" id="exampleFormControlInput1" placeholder="Judul Program" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Deskripsi Program</label>
                                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi Program" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Foto Program</label>
                                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="upload" class="btn" style="background-color: #137F7F; color:white">Realisasikan</button>
                            </div>
                            <br>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Nama Pengusul</th>
                            <th>Judul</th>
                            <th>Vote</th>
                            <th style="width: 10px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['judul']; ?></td>
                                <td align="center">
                                    <span class="likes"><?php echo getLikes($data['id']); ?></span>
                                    <i <?php if (userLiked($data['id'])) : ?> class="fas fa-heart like-btn" <?php else : ?> class="far fa-heart like-btn" <?php endif ?> data-id="<?php echo $data['id'] ?>" style="color: red;"></i>
                                </td>
                                <td><button type="button" class="btn" data-toggle="modal" data-target="#detail<?= $no; ?>"><i class="fas fa-arrow-right" style="color: #137F7F"></i></button></td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="detail<?= $no++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Detail Usulan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body mx-4">
                                            <form>
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" id="nama" value="<?= $data['nama']; ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="judul">Judul Usulan</label>
                                                    <input type="text" class="form-control" id="judul" value="<?= $data['judul']; ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="deskripsi">Dekripsi Usulan</label>
                                                    <textarea class="form-control" id="deskripsi" rows="3" readonly><?= $data['deskripsi']; ?></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include_once "footer.php"; ?>