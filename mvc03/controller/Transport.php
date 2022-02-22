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
        require 'view/transport/detail.php';
    }

    public function create()
    {
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