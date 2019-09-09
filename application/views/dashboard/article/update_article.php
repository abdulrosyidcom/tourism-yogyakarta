
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <div class="row">
            <div class="col-md-12">
                <?= form_open_multipart('dashboard/update_article');?>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Form Update Article</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" name="title" value="<?= $article['title']; ?>">
                                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="category" name="category" value="<?= $article['category']; ?>">
                                        <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-2">Picture</div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('assets/img/article/') . $article['image']; ?>" class="img-thumbnail" alt="">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="image">Choose File</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="content" class="col-sm-2 col-form-label">Content</label>
                                    <div class="col-sm-10">
                                        <textarea name="content" id="ckeditor" class="ckeditor" value="<?= $article['content']; ?>"></textarea>
                                        <?= form_error('content', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                
                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Update Article</button>
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