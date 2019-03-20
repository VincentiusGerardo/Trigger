<script src="<?= base_url('js/setTable/product.js') ?>"></script>
<h2 class="card-title">Product</h2>
<hr>

<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelAdd">
<i class='fa fa-plus'></i> Add
</button>

<table id="tableProduct" class="tables" data-height="340">
  <tbody>
    <?php $i = 1; foreach($pro as $p){ ?>
    <tr>
      <td><?= $i ?></td>
      <td><?= $p->NamaProduct ?></td>
      <td><?= $p->Keterangan ?></td>
      <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalGambar<?= $p->ID_Product; ?>">View</button></td>
      <td>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit<?= $p->ID_Product; ?>"><i class='fa fa-edit'></i></button>
          &nbsp;&nbsp;
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete<?= $p->ID_Product; ?>"><i class='fa fa-trash'></i></button>
      </td>
    </tr>
    <?php $i++; } ?>
  </tbody>
</table>