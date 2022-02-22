<!-- view/driver/list.php -->
<?php $title = 'Sofőr' 
?>

<?php include 'view/inc/header.php'; ?>
<?php ob_start() ?>
	<br>
    <center><h1><?= $title ?></h1></center>

	<br>
	<div class="table-responsive"> 
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Jármű</th>
            <th>Sofőr</th>
            <th>Dátum</th>
            <th>Adatok</th>
            <th>Módosítás</th>
            <th>Türlés</th>
        </tr>
        <?php foreach ($transport as $row): ?>
        <tr>
            <td><?= $row['vehicle_id'] ?></td>
            <td><?= $row['driver_id'] ?></td>
            <td><?= $row['order_date'] ?></td>
            <td><a href="/mvc03/index.php/transport/detail?id=<?= $row['id'] ?>" class="btn btn-success btn-xs"> Adatok</a></td>
            <td><a href="/mvc03/index.php/transport/edit?id=<?= $row['id'] ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></span> Módosítás</a></td>
            <td><a href="/mvc03/index.php/transport/delete?id=<?= $row['id']?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-trash"></span> Törlés</a></td>
        </tr>
        <?php endforeach ?>
    </table>
	</div>
    <br>
    <a href="/mvc03/index.php/transport/create" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Új</a>
<?php $puffer = ob_get_clean() ?>

<?php require 'view/inc/footer.php'; ?>
<?php include 'view/template.php' ?>