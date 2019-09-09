<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6 mb-5">

            <form action="" method="">
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" id="email" name="email" class="form-control" value="<?= $user['email']; ?>" readonly>
                </div>
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?= $user['name']; ?>">
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" alt="">
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

                <div class="form-group">
                    <button type="submit" class="btn btn-warning btn-block">Edit</button>
                </div>
                




            </form>

        </div>
    </div>
</div>