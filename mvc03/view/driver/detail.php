<!-- view/driver/detail.php -->
<?php $title = 'Sofőr adatok' ?>

<?php include 'view/inc/header.php'; ?>
<?php ob_start() ?>
    <h1><?= $title ?></h1>

    <a href="/mvc03/index.php/driver" class="btn btn-primary btn-sm">Vissza</a>
    <dl>
        <dt>Név : </dt>
        <dd><?= $driver['name'] ?></dd>
        <dt>Forgalomba helyezés éve : </dt>
        <dd><?= $driver['year'] ?></dd>
    </dl>
<?php $puffer = ob_get_clean() ?>

<?php require 'view/inc/footer.php'; ?>
<?php include 'view/template.php' ?>