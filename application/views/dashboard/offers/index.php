
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <div class="row">

        <div class="col-md-12">

          <?= $this->session->flashdata('message'); ?>

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Price</th>
                <th scope="col">Active</th>
                <th scope="col">Date Created</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($offers as $offer) : ?>
                <tr>
                  <th scope="row"><?= $no++; ?></th>
                  <td><?= $offer['title']; ?></td>
                  <td><?= $offer['author']; ?></td>
                  <td>Rp. <?= $offer['price']; ?></td>
                  <td>
                    <?php if ($offer['is_active'] == 'active') : ?>
                      <span class="badge badge-success">
                        <?= $offer['is_active']; ?>
                      </span>
                      <?php else: ?>
                        <span class="badge badge-danger">
                          <?= $offer['is_active']; ?>
                        </span>
                    <?php endif; ?>
                  </td>
                  <td><?= date('d M Y', $offer['date_created']); ?></td>

                  <td>
                    <a href="<?= base_url('dashboard/edit_offers/') . $offer['id']; ?>" class="badge badge-info">Update</a>
                    <a href="<?= base_url('dashboard/delete_offers/') . $offer['id']; ?>" class="badge badge-danger" onclick="return confirm('Delete Data ?')">Delete</a>
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