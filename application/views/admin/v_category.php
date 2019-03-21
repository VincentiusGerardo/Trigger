<script>
$(function(){
    $("#tableCategory").bootstrapTable({
        columns: [
            {
                title: 'No',
                align: 'center'
            }, {
                title: 'Nama Category',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Action',
                align: 'center'
            }
        ]
    });
});
</script>
<h2 class="card-title">Category</h2>
<hr>

<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelAdd">
<i class='fa fa-plus'></i> Add
</button>

<table id="tableCategory" class="tables" data-height="340">
  <tbody>
    <?php $i = 1; foreach($cat as $c){ ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $c->NamaCategory ?></td>
        <td>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit<?= $c->ID_Category; ?>" data-toggle="tooltip" title="Edit <?= $c->NamaCategory ?>"><i class='fa fa-edit'></i></button>
            &nbsp;
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete<?= $c->ID_Category; ?>" data-toggle="tooltip" title="Delete <?= $c->NamaCategory ?>"><i class='fa fa-trash'></i></button>
        </td>
    </tr>
  </tbody>
    <?php $i++; } ?>
</table>