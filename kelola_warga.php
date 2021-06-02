<?php
require_once "config.php";
if (!$_SESSION["id"]) {
  header("Location: login");
  exit();
} else if ($_SESSION["id_status"] != 1) {
  header("Location: dashboard");
  exit();
}

include_once "header.php";
include_once "sidebar.php";
include_once "topbar.php";

$sql = mysqli_query($conn, "SELECT * FROM user");
?>

<!-- Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 font-weight-bold" style="color: #137F7F">Kelola Warga</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th style="width: 50px;">No</th>
              <th>Nama</th>
              <th>NIK</th>
              <th style="width: 100px;">Action</th>
              <th style="width: 10px;"></th>
            </tr>
          </thead>
          <tbody>

            <?php
            $no = 1;
            while ($data = mysqli_fetch_assoc($sql)) { ?>
              <tr>
                <td class="text-center"><?= $no; ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['nik'] ?></td>
                <td class="text-center"><a href="delete.php?id=<?= $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')"><button type="button" class="btn btn-danger">Delete</button></a></td>
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
                      <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" value=" <?= $data['nik']; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" value="<?= $data['nama']; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" value="<?= $data['email']; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="text" class="form-control" id="no_hp" value="<?= $data['no_hp']; ?> " readonly>
                      </div>
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