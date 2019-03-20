<!-- Modal Add -->
<div class="modal fade" id="modelAdd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doInsertProduct') ?>" method="post">
                <div class="form-group">
                  <label for="">Nama Produk</label>
                  <input type="text"
                    class="form-control" name="nProduct">
                </div>
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <textarea class="editor" name="ket"></textarea>
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

<?php foreach($pro as $p){ ?>
<!-- Modal Gambar -->
<div class="modal fade" id="modalGambar<?= $p->ID_Product; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doInsertProduct') ?>" method="post">
                <div class="form-group">
                  <label for="">Nama Produk</label>
                  <input type="text"
                    class="form-control" name="nProduct">
                </div>
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <textarea class="editor" name="ket"></textarea>
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

<!-- Modal Edit -->
<div class="modal fade" id="modalEdit<?= $p->ID_Product; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doInsertProduct') ?>" method="post">
                <div class="form-group">
                  <label for="">Nama Produk</label>
                  <input type="text"
                    class="form-control" name="nProduct">
                </div>
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <textarea class="editor" name="ket"></textarea>
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

<!-- Modal Delete -->
<div class="modal fade" id="modalDelete<?= $p->ID_Product; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/Source/do/doInsertProduct') ?>" method="post">
                <div class="form-group">
                  <label for="">Nama Produk</label>
                  <input type="text"
                    class="form-control" name="nProduct">
                </div>
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <textarea class="editor" name="ket"></textarea>
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
<?php } ?>