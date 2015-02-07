<?php

namespace Controller;

class Main {


    public function __construct()
    {
        $this->model = new \Model\Main();
        $this->view = new \View\Main();
        // TODO: Implement __construct() method.
    }

    public function index() {
        $this->model->index();
        $this->view->index();
    }

}