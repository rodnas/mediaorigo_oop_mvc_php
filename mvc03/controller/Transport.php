<?php 
class Transport{
    protected $model = '';

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $transport = $this->model->getAlltransport();
        require 'view/transport/list.php';
    }

    public function detail($id)
    {
        $transport = $this->model->getTransportById($id);
	$vehicle = $this->model->getVehicleId($transport['vehicle_id']);
	$driver = $this->model->getDriverId($transport['driver_id']);
        require 'view/transport/detail.php';
    }

    public function create()
    {
	$vehicles = $this->model->getVehicles();
	$drivers = $this->model->getDrivers();
        if ($_POST) {
            $this->model->insert();
            header("Location: /mvc03/index.php/transport");
        } else {
            require 'view/transport/form.php';
        }
    }

    public function edit($id)
    {
        if ($_POST) {
            $this->model->update($id);
            header("Location: /mvc03/index.php/transport");
        } else {
            $transport = $this->model->getTransportById($id);
	    $vehicles = $this->model->getVehicles($transport['vehicle_id']);
            $drivers = $this->model->getDrivers($transport['driver_id']);
            require 'view/transport/form.php';
        }
    }

    public function delete($id)
    {
        if ($id) {
            $this->model->delete($id);
            header("Location: /mvc03/index.php/transport");
        }
    }

}