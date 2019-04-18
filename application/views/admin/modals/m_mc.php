<!-- Modal Add -->
<div class="modal fade" id="modelAdd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add MC</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doInsertMC') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Nama MC</label>
                  <input type="text" class="form-control" name="nMC">
                </div>
                <div class="form-group">
                    <label for="">Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="gambar" accept="image/*">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php foreach($mc as $m){ ?>
<!-- Modal Gambar -->
<div class="modal fade" id="modalGambar<?= $m->ID_MC; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gambar <?= $m->NamaMC ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <img src="<?= base_url('media/MC/' . $m->Image) ?>" class="img-fluid" style="width: 100%;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Upload Gambar -->
<div class="modal fade" id="modalUpload<?= $m->ID_MC; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Gambar <?= $m->NamaMC ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doUploadGambarMC') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $m->ID_MC ?>">
                <input type="hidden" name="nama" value="<?= $m->NamaMC ?>">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="gambar" accept="image/*">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="modalEdit<?= $m->ID_MC; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add MC</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doUpdateMC') ?>" method="post">
                <input type="hidden" name="id" value="<?= $m->ID_MC ?>">
                <div class="form-group">
                  <label for="">Nama MC</label>
                  <input type="text" class="form-control" name="nMC" value="<?= $m->NamaMC ?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modalDelete<?= $m->ID_MC; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add MC</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doDeleteMC') ?>" method="post">
                <input type="hidden" name="id" value="<?= $m->ID_MC ?>">
                <h1 style="text-align: center">Are you Sure?</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>