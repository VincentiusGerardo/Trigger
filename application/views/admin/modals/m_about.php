<!-- Modal Add -->
<div class="modal fade" id="modelAdd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add About</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doInsertAbout') ?>" method="post">
                <div class="form-group">
                  <label for="">Judul</label>
                  <input type="text"
                    class="form-control" name="jdl">
                </div>
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <textarea class="editor" name="isi"></textarea>
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
<?php foreach($isi as $i){ ?>
    <!-- Modal Edit -->
    <div class="modal fade" id="update<?= $i->ID_About ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update <?= $i->Judul ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doUpdateAbout') ?>" method="post">
                    <input type="hidden" name="ID_A" value="<?= $i->ID_About ?>">
                    <textarea name="isiA" class="editor"><?= $i->Keterangan ?></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="delete<?= $i->ID_About ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete <?= $i->Judul ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doDeleteAbout') ?>" method="post">
                    <input type="hidden" name="idAbout" value="<?= $i->ID_About ?>">
                    <h1 class="peringatan">Are You Sure?</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Delete</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>