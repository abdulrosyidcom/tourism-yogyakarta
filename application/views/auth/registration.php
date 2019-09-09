
<div class="container col-lg-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>

                        <?= $this->session->flashdata('message'); ?>

                        <form class="user" action="<?= base_url('registration'); ?>" method="post">
                            
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" placeholder="Full Name" name="name" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" placeholder="Email Address" name="email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password1">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password" placeholder="Repeat Password" name="password2">
                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
                            </button>
                        </form>
                        <hr>
                        <!-- <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div> -->
                        <div class="text-center">
                            <a class="small" href="<?= base_url('login'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
