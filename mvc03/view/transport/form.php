<!-- view/driver/form.php -->
<?php
$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

// Set form action
if ($uri[1] === 'edit') {
    $title = 'Módosítás Fuvar';
    $form_action = "/mvc03/index.php/transport/edit?id=" . $_GET['id'];
} else {
    $title = 'Új Fuvar';
    $form_action = "/mvc03/index.php/transport/create";
}

$valVehicle_id = isset($transport['vehicle_id']) ? $transport['vehicle_id'] : '';
$valDriver_id = isset($transport['driver_id']) ? $transport['driver_id'] : '';
$valOrder_date = isset($transport['order_date']) ? $transport['order_date'] : '';
$valId = isset($transport['id']) ? $transport['id'] : '';
?>

<?php include 'view/inc/header.php'; ?>
<?php ob_start() ?>
    <h1><?= $title ?></h1>

    <a href="/mvc03/index.php/transport" class="btn btn-primary btn-sm">Vissza</a>
    <form action="<?= $form_action ?>" method="post">
        <?php if ($valId): ?>
            <input type="hidden" name="id" value="<?= $valId ?>">
        <?php endif ?>

        <div class="form-group">
            <label for="vehicle_id">Jármű</label>
	        <select name="vehicle_id" class="form-control" id="vehicle_id" style="height: 34px;">
		    <option value='0'>----</option>
	            <?php foreach($vehicles as $vehicle): ?>
		    <?php 
				if ($vehicle['id'] == $valVehicle_id) {
					$selected = ' SELECTED';
				} else {
					$selected =  ''; 
				}
		    ?>
	            <option value="<?php echo $vehicle['id']; ?>" <?php echo $selected; ?>>
	                <?php echo $vehicle['lpn']; ?>
	            </option>
	            <?php endforeach; ?>
	        </select>
        </div>

        <div class="form-group">
            <label for="driver_id">Sofőr</label>
	        <select name="driver_id" id="driver_id" class="form-control" style="height: 34px;">
		    <option value='0'>----</option>
	            <?php foreach($drivers as $driver): ?>
		    <?php 
				if ($driver['id'] == $valDriver_id) {
					$selected = ' SELECTED';
				} else {
					$selected =  ''; 
				}
		    ?>
	            <option value="<?php echo $driver['id']; ?>" <?php echo $selected; ?>>
	                <?php echo $driver['name']; ?>
	            </option>
	            <?php endforeach; ?>
	        </select>

        </div>

        <div class="form-group">
            <label for="order_date">Dátum</label>
            <input name="order_date" type="date" value="<?= $valOrder_date ?>" class="form-control" id="order_date" placeholder="Dátum">
        </div>    
		

        <button class="btn btn-primary" type="submit">Mentés</button>
    </form>
<?php $puffer = ob_get_clean() ?>

<?php require 'view/inc/footer.php'; ?>
<?php include 'view/template.php' ?>