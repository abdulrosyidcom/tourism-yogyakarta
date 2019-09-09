
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <div class="row">
        <div class="container">
          <div class="col-md-4">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $category['id']; ?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $category['title']; ?>">
                </div>
                <div class="form-group">
                    <label for="is_active">Active</label>
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
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->