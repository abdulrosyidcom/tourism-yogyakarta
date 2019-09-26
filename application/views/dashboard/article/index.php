
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <div class="row">
        <div class="col-md-12">
          <?= $this->session->flashdata('message'); ?>

          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Author</th>
                <th scope="col">Date Created</th>
                <th scope="col">Is Active</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach( $articles as $article ) : ?>
                <tr>
                  <th scope="row"><?= $no++; ?></th>
                  <td><?= substr($article['title'], 0, 27); ?></td>
                  <td><?= $article['category']; ?></td>
                  <td><?= $article['author']; ?></td>
                  <td><?= date('d M y', $article['date_created']);  ?></td>

                  <?php if( $article['is_active'] == 'active' ) : ?>
                    <td><span class="badge badge-success"><?= $article['is_active']; ?></span></td>
                    <?php elseif ( $article['is_active'] == 'no active' ) : ?>
                    <td><span class="badge badge-danger"><?= $article['is_active']; ?></span></td>
                  <?php endif; ?>

                  <td>
                    <a href="<?= base_url(); ?>dashboard/update_article/<?= $article['url_title']; ?>" class="badge badge-primary">update</a>
                    <a href="<?php base_url(); ?>delete_article/<?= $article['id']; ?>" onclick="return confirm('yakin dihapus?');" class="badge badge-danger">delete</a>
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