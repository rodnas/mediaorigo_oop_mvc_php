<!-- view/driver/list.php -->
<?php $title = 'Sofőr' 
?>

<?php ob_start() ?>
	<br>
    <center><h1><?= $title ?></h1></center>

	<br>
	<div class="table-responsive"> 
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Név</th>
            <th>Születési év</th>
            <th>Detail</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($driver as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['year'] ?></td>
            <td><a href="/mvc03/index.php/driver/detail?id=<?= $row['id'] ?>" class="btn btn-success btn-xs"> Adatok</a></td>
            <td><a href="/mvc03/index.php/driver/edit?id=<?= $row['id'] ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></span> Módosítás</a></td>
            <td><a href="/mvc03/index.php/driver/delete?id=<?= $row['id']?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-trash"></span> Törlés</a></td>
        </tr>
        <?php endforeach ?>
    </table>
	</div>
    <br>
    <a href="/mvc03/index.php/driver/create" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Új</a>
<?php $puffer = ob_get_clean() ?>

<?php include 'view/template.php' ?>