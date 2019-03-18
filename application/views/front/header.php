<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trigger EO</title>

    <!-- Image on tab -->
    <link rel="icon" href="<?= base_url('media/logo.png') ?>" type="image/png">

    <!-- Jquery -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.min.css') ?>">
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    
    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css') ?>">
    <script src="<?= base_url('js/script.js') ?>"></script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand">Trigger EO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">About</a>
                <div class="dropdown-menu">
                    <?php 
                        $sql = $this->db->get_where('ms_about', array('FlagActive' => 'Y'));
                        foreach($sql->result() as $a){
                    ?>
                    <a class="dropdown-item" href="<?= base_url('About/' . $a->JudulSEO); ?>"><?= $a->Judul ?></a>
                    <?php } ?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Product/'); ?>">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Contact/'); ?>">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>