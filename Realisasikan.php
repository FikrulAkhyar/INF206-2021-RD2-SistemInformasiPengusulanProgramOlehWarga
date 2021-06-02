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

                <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 font-weight-bold" style="color: #137F7F">Kelola Usulan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="button-realisasi text-right">
            <td><button class="btn border" type="button" id="realisasikan" data-toggle="modal" data-target="#exampleModalCenter" onclick="document.getElementById('realisasikan').style.color = 'black';" style="font-weight: bold; color:#137F7F">Realisasikan  <i class="fas fa-plus"></i></button>
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
        <br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Nama Pengusul</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Vote</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['judul']; ?></td>
                                <td><?= $data['deskripsi']; ?></td>
                                <td id="rating" align="center"><?= $data['jumlah_vote']; ?><i class="fas fa-heart ml-1" style="color: red;"></i></td>                             </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="like-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Anda Melakukan Voting</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda Yakin Melakukan Voting?
                                </div>
                                <div class="modal-footer">
                                    <form>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Vote</button>
                                    </form>
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