    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


      <div class="row">
        <div class="col-lg-12">

          <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formModal">Add New Submenu</button>

          <?php if( validation_errors() ) : ?>
            <div class="alert alert-danger">
              <?= validation_errors(); ?>
            </div>
          <?php endif; ?>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All Submenu Management</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Title</th>
                      <th>Menu</th>
                      <th>Url</th>
                      <th>Icon</th>
                      <th>Active</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach( $submenu as $sm ) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $sm['title']; ?></td>
                      <td><?= $sm['menu']; ?></td>
                      <td><?= $sm['url']; ?></td>
                      <td><?= $sm['icon']; ?></td>
                      <td><?= $sm['is_active']; ?></td>
                      <td>
                        <a href="" class="badge badge-primary">Update</a>
                        <a href="" class="badge badge-danger">Delete</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->


   
<!-- Modal -->

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Add New Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('dashboard/sub_menu'); ?>" method="post">
              <div class="modal-body">  
                
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                </div>

                <div class="form-group">
                    <select class="form-control" id="menu_id" name="menu_id">
                      <option value="">Select Menu</option>
                        <?php foreach( $menu as $m ) : ?>
                          <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="url" name="url" placeholder="Submenu Url">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu Icon">
                </div>
                
                <div class="form-group">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active" checked>
                    <label for="is_active" class="form-check-label">Active ?</label>
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
              </div>
            </form>
        </div>
    </div>
</div>