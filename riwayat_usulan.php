<?php
require_once "config.php";
if (!$_SESSION["id"]) {
    header("Location: login");
    exit();
}

include_once "header.php";
include_once "sidebar.php";
include_once "topbar.php";

$id_user = $_SESSION['id'];
$query = mysqli_query($conn, "SELECT * FROM usulan WHERE id_user = '$id_user'");

?>

<!-- Content Riwayat Pengusulan-->
<div class="container-fluid">
    <!-- End of Content -->
    <!-- Begin Page Content -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 font-weight-bold" style="color: #137F7F">Riwayat Pengajuan Usulan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">No</th>
                            <th>Judul</th>
                            <th class="text-center" style="width: 100px;">Jumlah Vote</th>
                            <th class="text-center" style="width: 10px;">Action</th>
                            <th style="width: 10px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $data['judul']; ?></td>
                                <td class="text-center"><?= $data['jumlah_vote']; ?></td>
                                <td><a href="hapus_riwayat.php?id=<?= $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')"><button type="button" class="btn btn-danger">Delete</button></a></td>
                                <td><button type="button" class="btn" data-toggle="modal" data-target="#detail"><i class="fas fa-arrow-right" style="color: #137F7F"></i></button></td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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

<!-- End of Content -->

<?php include_once "footer.php"; ?>