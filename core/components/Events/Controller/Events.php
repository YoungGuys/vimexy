<?php
/**
 * Created by PhpStorm.
 * User: Balon
 * Date: 07.02.2015
 * Time: 21:28
 */

namespace Controller;
use Balon\System;

class Events extends System\Controller{

    function __construct()
    {
        $this->model = new \Model\Events();
        $this->view = new \View\Events();
        // TODO: Implement __construct() method.
    }

    public function index()
    {
        $data['data'] = $this->model->loadList();
        $this->view->loadList($data);
    }

    public function show() {
        $data = $this->model->show();
        $this->view->show($data);
    }
} 