<?php 
class Vehicle{
    protected $model = '';

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $vehicle = $this->model->getAllvehicle();
        require 'view/vehicle/list.php';
    }

    public function detail($id)
    {
        $vehicle = $this->model->getVehicleById($id);
        require 'view/vehicle/detail.php';
    }

    public function create()
    {
        if ($_POST) {
            $this->model->insert();
            header("Location: /mvc03/index.php/vehicle");
        } else {
            require 'view/vehicle/form.php';
        }
    }

    public function edit($id)
    {
        if ($_POST) {
            $this->model->update($id);
            header("Location: /mvc03/index.php/vehicle");
        } else {
            $vehicle = $this->model->getVehicleById($id);
            require 'view/vehicle/form.php';
        }
    }

    public function delete($id)
    {
        if ($id) {
            $this->model->delete($id);
            header("Location: /mvc03/index.php/vehicle");
        }
    }
}