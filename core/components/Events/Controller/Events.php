<?php
/**
 * Created by PhpStorm.
 * User: Balon
 * Date: 07.02.2015
 * Time: 21:28
 */

namespace Controller;
use Balon\System;
use Parse\ParseUser;

class Events extends System\Controller{

    function __construct()
    {
        $this->model = new \Model\Events();
        $this->view = new \View\Events();
        // TODO: Implement __construct() method.
    }

    public function index()
    {
        if ($_GET['access']) {
            setcookie("auth",true,time() + 60*60*24*7);
            setcookie("id",$_GET['id'],time() + 60*60*24*7);
        }
        $data['data'] = $this->model->loadList();
        $this->view->loadList($data);
    }

    public function show() {
        $data = $this->model->show();
        $this->view->show($data);
    }

    public function addtomylist() {
        $this->model->addToMyList();
    }

    public function My() {
        $data = $this->model->myList();
        $this->view->loadMyList($data);
    }

    public function showMap()
    {
        $data = $this->model->map();
        $this->view->loadMap($data);
    }

} 