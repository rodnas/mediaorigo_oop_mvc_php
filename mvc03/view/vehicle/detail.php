<!-- view/vehicle/detail.php -->
<?php $title = 'Jármű adatok' ?>

<?php include 'view/inc/header.php'; ?>
<?php ob_start() ?>
<h1><?= $title ?></h1>

    <a href="/mvc03/index.php/vehicle" class="btn btn-primary btn-sm">Vissza</a>
    <dl>
        <dt>Típus : </dt>
        <dd><?= $vehicle['type'] ?></dd>
        <dt>Rendszám : </dt>
        <dd><?= $vehicle['lpn'] ?></dd>
        <dt>Forgalomba helyezés éve : </dt>
        <dd><?= $vehicle['year'] ?></dd>
    </dl>
<?php $puffer = ob_get_clean() ?>

<?php require 'view/inc/footer.php'; ?>
<?php include 'view/template.php' ?>