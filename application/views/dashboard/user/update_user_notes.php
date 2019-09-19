
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <div class="row">
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">
                    Form Update User Notes
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" id="id" value="<?= $userNote['id']; ?>">
                        <div class="form-group">
                            <label for="notes">User Notes</label>
                            <textarea class="form-control" id="notes" rows="3" name="notes"><?= $userNote['notes']; ?></textarea>
                            <?= form_error('notes', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="is_active">Is Active</label>
                            <select class="form-control" id="is_active" name="is_active">
                                <option>active</option>
                                <option>no active</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->