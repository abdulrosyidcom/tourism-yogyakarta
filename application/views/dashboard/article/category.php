
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <div class="row">
            <div class="col-md-6">
                
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#categoryModal">Add New Category</button>

                <?php if( validation_errors() ) : ?>
                    <div class="alert alert-danger">
                    <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>

                <?= $this->session->flashdata('message'); ?>

                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Is_active</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach( $categorys as $category ) : ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $category['title']; ?></td>

                        <?php if( $category['is_active'] == 'active' ) : ?>
                        <td><span class="badge badge-success"><?= $category['is_active']; ?></span></td>
                        <?php elseif ( $category['is_active'] == 'no active' ) : ?>
                        <td><span class="badge badge-danger"><?= $category['is_active']; ?></span></td>
                        <?php endif; ?>

                        <td>
                            <a href="<?= base_url(); ?>dashboard/update_category_article/<?= $category['id']; ?>" class="badge badge-primary">update</a>
                            <a href="<?php base_url(); ?>delete_category_article/<?= $category['id']; ?>" onclick="return confirm('yakin dihapus?');" class="badge badge-danger">delete</a>
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


  <!-- Modal -->

<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Add New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('dashboard/category_article'); ?>" method="post">
              <div class="modal-body">  
                
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Category title">
                </div>
                
                <div class="form-group">
                    <select class="form-control" id="is_active" name="is_active">
                      <option value="active">active</option>
                      <option value="no active">no active</option>
                    </select>
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