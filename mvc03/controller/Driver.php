<?php 
class Driver{
    protected $model = '';

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $driver = $this->model->getAlldriver();
        require 'view/driver/list.php';
    }

    public function detail($id)
    {
        $driver = $this->model->getDriverById($id);
        require 'view/driver/detail.php';
    }

    public function create()
    {
        if ($_POST) {
            $this->model->insert();
            header("Location: /mvc03/index.php/driver");
        } else {
            require 'view/driver/form.php';
        }
    }

    public function edit($id)
    {
        if ($_POST) {
            $this->model->update($id);
            header("Location: /mvc03/index.php/driver");
        } else {
            $driver = $this->model->getDriverById($id);
            require 'view/driver/form.php';
        }
    }

    public function delete($id)
    {
        if ($id) {
            $this->model->delete($id);
            header("Location: /mvc03/index.php/driver");
        }
    }
}