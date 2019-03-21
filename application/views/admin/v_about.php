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
        <div id="Collapse<?= $i->ID_About ?>" class="collapse isi" data-parent="#accordion">
            <div class="card-body">
                <?= $i->Keterangan ?>
                <br><br>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#update<?= $i->ID_About ?>" data-toggle="tooltip" title="Edit <?= $i->Judul ?>">
                    <i class='far fa-edit'></i> Edit
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $i->ID_About ?>" data-toggle="tooltip" title="Edit <?= $i->Judul ?>">
                    <i class='fa fa-trash'></i> Delete
                </button>
            </div>
        </div>
    </div>
    <?php } ?>
</div> 