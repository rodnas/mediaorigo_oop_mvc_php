<!-- view/vehicle/form.php -->
<?php
$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

// Set form action
if ($uri[1] === 'edit') {
    $title = 'Módosítás Jármű';
    $form_action = "/mvc03/index.php/vehicle/edit?id=" . $_GET['id'];
} else {
    $title = 'Új jármű';
    $form_action = "/mvc03/index.php/vehicle/create";
}

$valType = isset($vehicle['type']) ? $vehicle['type'] : '';
$valLpn = isset($vehicle['lpn']) ? $vehicle['lpn'] : '';
$valYear = isset($vehicle['year']) ? $vehicle['year'] : '';
$valId = isset($vehicle['id']) ? $vehicle['id'] : '';
?>

<?php ob_start() ?>
    <h1><?= $title ?></h1>

    <a href="/mvc03/index.php/vehicle" class="btn btn-primary btn-sm">Vissza</a>
    <form action="<?= $form_action ?>" method="post">
        <?php if ($valId): ?>
            <input type="hidden" name="id" value="<?= $valId ?>">
        <?php endif ?>

        <div class="form-group">
            <label for="type">Típus</label>
            <input name="type" type="text" value="<?= $valType ?>" class="form-control" id="type" placeholder="Típus">
        </div>

        <div class="form-group">
            <label for="lpn">Rendszám</label>
            <input name="lpn" type="text" value="<?= $valLpn ?>" class="form-control" id="lpn" placeholder="Rendszám">
        </div>

        <div class="form-group">
            <label for="start_year">Forgalomba helyezés éve</label>
            <input name="year" type="text" value="<?= $valYear ?>" class="form-control" id="year" placeholder="Forgalomba helyezés éve">
        </div>    
		

        <button class="btn btn-primary" type="submit">Mentés</button>
    </form>
<?php $puffer = ob_get_clean() ?>

<?php include 'view/template.php' ?>