<?php
require_once("config.php");

if($_POST['id']) {
    $id = $_POST['id'];
    $query = mysqli_query($conn, "SELECT * from user where id='$id'");
    while ($warga = mysqli_fetch_array($query)){       
?>

            <!-- Modal -->
              <form method="post" action="save.php">
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">nama</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $warga['nama'];?>" name="nama">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">nik</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $warga['nik'];?>" name="nik">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">email</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $warga['email'];?>" name="email">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">HP</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $warga['no_hp'];?>" name="no_hp">
                            </div>
                            </div>
                 
                  <div class="modal-footer">
                  <button class="btn btn-danger pull-left" data-dismiss="modal">Cancel</a></button>
                  <button type="submit" class="btn btn-primary pull-right">Save</a></button>
                  </div>            
            </form>
        <?php } }
?>