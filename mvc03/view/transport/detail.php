<!-- view/driver/detail.php -->
<?php $title = 'Fuvar adatok' ?>

<?php include 'view/inc/header.php'; ?>
<?php ob_start() ?>
    <h1><?= $title ?></h1>

    <a href="/mvc03/index.php/transport" class="btn btn-primary btn-sm">Vissza</a>
    <dl>
        <dt>Jármű : </dt>
        <dd><?= $vehicle['lpn'] ?></dd>
        <dt>Sofőr : </dt>
        <dd><?= $driver['name'] ?></dd>
        <dt>Dátum : </dt>
        <dd><?= $transport['order_date'] ?></dd>
    </dl>
<?php $puffer = ob_get_clean() ?>

<?php require 'view/inc/footer.php'; ?>
<?php include 'view/template.php' ?>