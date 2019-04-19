<!-- Modal Add -->
<div class="modal fade" id="modelAdd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Paket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doInsertPaket') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Nama Paket</label>
                  <input type="text" class="form-control" name="nPaket">
                </div>
                <div class="form-group">
                  <label for="">Nama MC</label>
                  <select class="selectpicker form-control" title="Select MC" data-live-search="true" data-size="5" name="sMC">
                  <?php foreach($mc as $m){ ?>
                    <option value="<?= $m->ID_MC ?>"><?= $m->NamaMC ?></option>
                  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Nama Catering</label>
                  <select class="selectpicker form-control" title="Select Catering" data-live-search="true" data-size="5" name="sCatering">
                  <?php foreach($cat as $c){ ?>
                    <option value="<?= $c->ID_Catering ?>"><?= $c->NamaVendor ?> - <?= $c->Menu ?></option>
                  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Nama Product</label>
                  <select class="selectpicker form-control" title="Select Product" data-live-search="true" data-size="5" name="sProduct">
                  <?php foreach($pro as $p){ ?>
                    <option value="<?= $p->ID_Product ?>"><?= $p->NamaProduct ?></option>
                  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Nama Tempat</label>
                  <input type="text" class="form-control" name="nTempat">
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <textarea name="alamats" class="form-control editor"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="gambar" accept="image/*">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                  <label for="">Harga</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="text" class="form-control number" name="hargas">
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
<?php foreach($package as $paket){ ?>
<!-- Modal Gambar -->
<div class="modal fade" id="modalGambar<?= $paket->ID_Paket ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gambar <?= $paket->NamaPaket ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <img src="<?= base_url('media/paket/' . $paket->Image) ?>" class="img-fluid" style="width: 100%;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Upload Image -->
<div class="modal fade" id="modalUpload<?= $paket->ID_Paket ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload <?= $paket->NamaPaket ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doUploadGambarPaket') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $paket->ID_Paket ?>">
                <input type="hidden" name="nama" value="<?= $paket->NamaPaket ?>">
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
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Delete -->
<div class="modal fade" id="modalDelete<?= $paket->ID_Paket ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete <?= $paket->NamaPaket ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doDeletePaket') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $paket->ID_Paket ?>">
                <h1 style="text-align: center;">Are you Sure?</h1>
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