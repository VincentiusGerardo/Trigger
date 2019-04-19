<script>
$(function(){
    $("#tablePackage").bootstrapTable({
        columns: [
            {
                title: 'No',
                align: 'center'
            }, {
                title: 'Nama Paket',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Nama MC',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Nama Vendor Catering',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Nama Product',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Nama Tempat',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Alamat',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Image',
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
<h2 class="card-title">Paket</h2>
<hr>

<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelAdd">
<i class='fa fa-plus'></i> Add
</button>

<table id="tablePackage" class="tables" data-height="340">
    <tbody>
    <?php $n = 1; foreach($package as $p){ ?>
        <tr>
            <td><?= $n ?></td>
            <td><?= $p->NamaPaket ?></td>
            <td><?= $p->NamaMC ?></td>
            <td><?= $p->NamaVendor ?></td>
            <td><?= $p->NamaProduct ?></td>
            <td><?= $p->NamaTempat ?></td>
            <td><?= $p->Alamat ?></td>
            <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalGambar<?= $p->ID_Paket?>">View</button></td>
            <td>Rp. <?= $p->Biaya ?></td>
            <td>
                <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalUpload<?= $p->ID_Paket; ?>" data-toggle="tooltip" title="Upload <?= $p->NamaPaket ?>"><i class='fa fa-upload'></i></button>
                &nbsp;
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete<?= $p->ID_Paket; ?>" data-toggle="tooltip" title="Delete <?= $p->NamaPaket ?>"><i class='fa fa-trash'></i></button>
            </td>
        </tr>
        <?php $n++;} ?>  
    </tbody>
</table>