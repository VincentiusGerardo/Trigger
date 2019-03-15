<br><br><br>
<div class="container">
    <?php foreach($judul as $j){ ?>
        <h2 class="card-title"><?= $j->Judul ?></h2>
        <p class="card-text"><?= $j->Keterangan ?></p>
    <?php } ?>
</div>