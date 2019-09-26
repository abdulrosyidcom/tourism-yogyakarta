
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <div class="row">

        <div class="col-md-10">

            <?= $this->session->flashdata('message'); ?>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">image</th>
                        <th scope="col">Notes</th>
                        <th scope="col">Active</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ( $userNotes as $us ) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $us['name']; ?></td>
                            <td>
                                <img width="50" src="<?= base_url('assets/img/profile/') . $us['image']; ?>" alt="">
                            </td>
                            <td><?= substr($us['notes'], 0, 30); ?></td>

                            <td>
                                <?php if ( $us['is_active'] == 'active' ) : ?>
                                    <span class="badge badge-success"><?= $us['is_active']; ?></span>
                                <?php else: ?>
                                    <span class="badge badge-warning"><?= $us['is_active']; ?></span>
                                <?php endif; ?>
                            </td>

                            <td><?= date('d M y', $us['date_created']); ?></td>
                            <td>
                                <a href="<?= base_url('dashboard/update_user_notes/') . $us['id']; ?>" class="badge badge-info">Update</a>
                                <a href="<?= base_url('dashboard/delete_user_notes/') . $us['id']; ?>" onclick="return confirm('yakin dihapus?');" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>  

      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->