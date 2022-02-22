<?php
$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

$uri0 = isset($uri[0]);
$uri1 = isset($uri[1]);

require_once "lib/Database.php";
$db = new Database();
switch ($uri[0]) {
    case "vehicle":
        require_once "controller/Vehicle.php";
        require_once "model/VehicleModel.php";
        $model = new VehicleModel($db);
        $controller = new Vehicle($model);

        if ($uri0 && $uri1 && $uri[0] === 'vehicle' && $uri[1] === 'detail') {         // Detail
            $id = $_GET['id'];
            $controller->detail($id);
        } elseif ($uri0 && $uri1 && $uri[0] === 'vehicle' && $uri[1] === 'edit') {     // Edit
            $id = $_GET['id'];
            $controller->edit($id);
        } elseif ($uri0 && $uri1 && $uri[0] === 'vehicle' && $uri[1] === 'delete') {   // Delete
            $id = $_GET['id'];
            $controller->delete($id);
        } elseif ($uri0 && $uri1 && $uri[0] === 'vehicle' && $uri[1] === 'create') {   // Create
            $controller->create();
        } elseif ($uri0 && $uri1 && $uri[0] === 'vehicle' && $uri[1] === 'search') {   // Search
            $controller->search();
        } elseif ($uri[0] === 'vehicle') {                                             // Index
            $controller->index();
        }
        break;
    default:
        header('HTTP/1.1 404 Not Found');
        echo '<html><body><h1>404</h1><br><br><h2><center>Halaman yang anda cari tidak ada</center></h2></body></html>';
}