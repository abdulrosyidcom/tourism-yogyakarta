
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <div class="row">

        <div class="col-md-12">
            <form action="<?= base_url('dashboard/add_offers'); ?>" method="post" enctype="multipart/form-data">

                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="title" placeholder="title" name="title">
                        <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="customFile" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="package" class="col-sm-2 col-form-label">Package</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="package" placeholder="package" name="package">
                        <?= form_error('package', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <textarea name="content" class="ckeditor" id="ckeditor"></textarea>
                            <?= form_error('content', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br>
                <div class="form-group row">
                    <label for="button" class="col-sm-2 col-form-label">Button</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <button class="btn btn-primary" type="submit">Add Offers</button>
                        </div>
                    </div>
                </div>







            </form>
        </div>
        

    
      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->