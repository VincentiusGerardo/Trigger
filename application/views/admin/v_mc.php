<script>
$(function(){
    $("#tableMC").bootstrapTable({
        columns: [
            {
                title: 'No',
                align: 'center'
            }, {
                title: 'Nama MC',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Image',
                align: 'center'
            }, {
                title: 'Action',
                align: 'center'
            }
        ]
    });
});
</script>
<h2 class="card-title">Master of Ceremony</h2>
<hr>

<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelAdd">
<i class='fa fa-plus'></i> Add
</button>

<table id="tableMC" class="tables" data-height="340">
    <tbody>
    <?php $n = 1; foreach($mc as $m){ ?>
        <tr>
            <td><?= $n ?></td>
            <td><?= $m->NamaMC ?></td>
            <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalGambar<?= $m->ID_MC?>">View</button></td>
            <td>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit<?= $m->ID_MC; ?>" data-toggle="tooltip" title="Edit <?= $m->NamaMC ?>"><i class='fa fa-edit'></i></button>
                &nbsp;
                <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalUpload<?= $m->ID_MC; ?>" data-toggle="tooltip" title="Upload <?= $m->NamaMC ?>"><i class='fa fa-upload'></i></button>
                &nbsp;
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete<?= $m->ID_MC; ?>" data-toggle="tooltip" title="Delete <?= $m->NamaMC ?>"><i class='fa fa-trash'></i></button>
            </td>
        </tr>
        <?php $n++;} ?>  
    </tbody>
</table>