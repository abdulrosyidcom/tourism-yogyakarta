
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <div class="row">
            <div class="col-md-12">
                <?= form_open_multipart('dashboard/add_article');?>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Form Add New Article</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" name="title" value="<?= set_value('title'); ?>">
                                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="category" name="category">
                                            <?php foreach( $categorys as $category ) : ?>
                                                <option value="<?= $category['title']; ?>"><?= $category['title']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose File</label>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="content" class="col-sm-2 col-form-label">Content</label>
                                    <div class="col-sm-10">
                                        <textarea name="content" id="ckeditor" class="ckeditor"></textarea>
                                        <?= form_error('content', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                
                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Add Article</button>
                                    </div>
                                </div>

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