<?php
define('URLROOT', 'http://rodnas/mvc03/index.php');

define('SITENAME', 'mediaorigo OOP MVC');

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
    case "driver":
        require_once "controller/Driver.php";
        require_once "model/DriverModel.php";
        $model = new DriverModel($db);
        $controller = new Driver($model);

        if ($uri0 && $uri1 && $uri[0] === 'driver' && $uri[1] === 'detail') {         // Detail
            $id = $_GET['id'];
            $controller->detail($id);
        } elseif ($uri0 && $uri1 && $uri[0] === 'driver' && $uri[1] === 'edit') {     // Edit
            $id = $_GET['id'];
            $controller->edit($id);
        } elseif ($uri0 && $uri1 && $uri[0] === 'driver' && $uri[1] === 'delete') {   // Delete
            $id = $_GET['id'];
            $controller->delete($id);
        } elseif ($uri0 && $uri1 && $uri[0] === 'driver' && $uri[1] === 'create') {   // Create
            $controller->create();
        } elseif ($uri0 && $uri1 && $uri[0] === 'driver' && $uri[1] === 'search') {   // Search
            $controller->search();
        } elseif ($uri[0] === 'driver') {                                             // Index
            $controller->index();
        }
        break;
    case "transport":
        require_once "controller/Transport.php";
        require_once "model/TransportModel.php";
        $model = new TransportModel($db);
        $controller = new Transport($model);

        if ($uri0 && $uri1 && $uri[0] === 'transport' && $uri[1] === 'detail') {         // Detail
            $id = $_GET['id'];
            $controller->detail($id);
        } elseif ($uri0 && $uri1 && $uri[0] === 'transport' && $uri[1] === 'edit') {     // Edit
            $id = $_GET['id'];
            $controller->edit($id);
        } elseif ($uri0 && $uri1 && $uri[0] === 'transport' && $uri[1] === 'delete') {   // Delete
            $id = $_GET['id'];
            $controller->delete($id);
        } elseif ($uri0 && $uri1 && $uri[0] === 'transport' && $uri[1] === 'create') {   // Create
            $controller->create();
        } elseif ($uri0 && $uri1 && $uri[0] === 'transport' && $uri[1] === 'search') {   // Search
            $controller->search();
        } elseif ($uri[0] === 'transport') {                                             // Index
            $controller->index();
        }
        break;
    default:
        header('HTTP/1.1 404 Not Found');
        echo '<html><body><h1>404</h1><br><br><h2><center>Halaman yang anda cari tidak ada</center></h2></body></html>';
}