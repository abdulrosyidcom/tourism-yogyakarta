<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center mb-5">
            <h4>Tulis Kritik dan saran <?= $user['name']; ?></h4>

            <button type="button" class="btn btn-warning mt-3 mb-3" data-toggle="modal" data-target="#notesModal">Add New Notes</button>

            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Author</th>
                    <th scope="col">Name</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Active</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach( $notes as $note ) : ?>
                        <?php if( $note['author'] == $user['email'] ) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $note['author']; ?></td>
                            <td><?= $note['name']; ?></td>
                            <td><?= substr( $note['notes'], 0, 10 ); ?></td>
                            <td>
                                <?php if( $note['is_active'] == 'active' ) : ?>
                                <small class="badge badge-success"><?= $note['is_active']; ?></small>
                                <?php else: ?>
                                <small class="badge badge-warning"><?= $note['is_active']; ?></small>
                                <?php endif; ?>
                            </td>
                            <td><?= date('d, M, Y', $note['date_created']); ?></td>
                        </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
                </table>
        </div>
    </div>
</div>



<!-- Modal -->

<div class="modal fade" id="notesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Add New Notes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('user/notes'); ?>" method="post">
                <div class="modal-body">  
                    
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="notes" name="notes" placeholder="Notes"></textarea>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>