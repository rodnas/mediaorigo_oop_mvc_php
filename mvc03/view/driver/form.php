<!-- view/driver/form.php -->
<?php
$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

// Set form action
if ($uri[1] === 'edit') {
    $title = 'Módosítás Sofőr';
    $form_action = "/mvc03/index.php/driver/edit?id=" . $_GET['id'];
} else {
    $title = 'Új jármű';
    $form_action = "/mvc03/index.php/driver/create";
}

$valName = isset($driver['name']) ? $driver['name'] : '';
$valYear = isset($driver['year']) ? $driver['year'] : '';
$valId = isset($driver['id']) ? $driver['id'] : '';
?>

<?php include 'view/inc/header.php'; ?>
<?php ob_start() ?>
    <h1><?= $title ?></h1>

    <a href="/mvc03/index.php/driver" class="btn btn-primary btn-sm">Vissza</a>
    <form action="<?= $form_action ?>" method="post">
        <?php if ($valId): ?>
            <input type="hidden" name="id" value="<?= $valId ?>">
        <?php endif ?>

        <div class="form-group">
            <label for="name">Név</label>
            <input name="name" type="text" value="<?= $valName ?>" class="form-control" id="name" placeholder="Név">
        </div>

        <div class="form-group">
            <label for="year">Születési év</label>
            <input name="year" type="text" value="<?= $valYear ?>" class="form-control" id="year" placeholder="Születési év">
        </div>    
		

        <button class="btn btn-primary" type="submit">Mentés</button>
    </form>
<?php $puffer = ob_get_clean() ?>

<?php require 'view/inc/footer.php'; ?>
<?php include 'view/template.php' ?>