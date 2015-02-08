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
        $contr = new  User();
        if (!$_COOKIE['auth']) {
            $contr->registration();
        }
        else {
            $contr = new Events();
            $contr->index();
        }
    }

}