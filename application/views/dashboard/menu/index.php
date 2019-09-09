    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


      <div class="row">
        <div class="col-lg-6">

          <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formModal">Add New Menu</button>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All Menu Management</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Menu</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach( $menu as $m ) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $m['menu']; ?></td>
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
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('dashboard/add_menu'); ?>" method="post">
              <div class="modal-body">  
                
                <div class="form-group">
                    <label for="menu">Menu Name</label>
                    <input type="text" class="form-control" id="menu" name="menu">
                </div>

                  <!-- <div class="form-group">
                      <label for="jurusan">Jurusan</label>
                      <select class="form-control" id="jurusan" name="jurusan">
                        
                        <option>Rosyid</option>
                        <option>Rosyid</option>
                        <option>Rosyid</option>
                        <option>Rosyid</option>
                          
                      </select>
                  </div> -->

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
              </div>
            </form>
        </div>
    </div>
</div>