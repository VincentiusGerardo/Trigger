<script>
$(function(){
    $("#tableCatering").bootstrapTable({
        columns: [
            {
                title: 'No',
                align: 'center'
            }, {
                title: 'Nama Catering',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Menu',
                align: 'center'
            }, {
                title: 'Harga',
                align: 'center'
            }, {
                title: 'Action',
                align: 'center'
            }
        ]
    });
});
</script>
<h2 class="card-title">Catering</h2>
<hr>

<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelAdd">
<i class='fa fa-plus'></i> Add
</button>

<table id="tableCatering" class="tables" data-height="340">
    <tbody>
    <?php $n = 1; foreach($cat as $c){ ?>
        <tr>
            <td><?= $n ?></td>
            <td><?= $c->NamaVendor ?></td>
            <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalMenu<?= $c->ID_Catering?>">View</button></td>
            <td>Rp. <?= $c->Harga ?></td>
            <td>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit<?= $c->ID_Catering; ?>" data-toggle="tooltip" title="Edit <?= $c->NamaVendor ?>"><i class='fa fa-edit'></i></button>
                &nbsp;
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete<?= $c->ID_Catering; ?>" data-toggle="tooltip" title="Delete <?= $c->NamaVendor ?>"><i class='fa fa-trash'></i></button>
            </td>
        </tr>
        <?php $n++;} ?>  
    </tbody>
</table>