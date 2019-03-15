<h2 class="card-title">About Us</h2>
<hr>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelAdd">
<i class='fa fa-plus'></i> Add
</button>

<div id="accordion" style="margin-top: 10px;">
    <?php foreach($isi as $i){ ?>
    <div class="card">
        <div class="card-header">
            <a class="card-link" data-toggle="collapse" href="#Collapse<?= $i->ID_About ?>">
            <?= $i->Judul ?>
            </a>
        </div>
        <div id="Collapse<?= $i->ID_About ?>" class="collapse show" data-parent="#accordion">
            <div class="card-body">
                <?= $i->Keterangan ?>
                <br><br>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#update<?= $i->ID_About ?>">
                    <i class='far fa-edit'></i> Edit
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="update<?= $i->ID_About ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $i->Judul ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="" method="post">
                    <textarea name="isiA" class="editor"><?= $i->Keterangan ?></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
</div> 

<!-- Modal Add -->
<div class="modal fade" id="modelAdd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                Body
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>