<?php
/**
 * Created by PhpStorm.
 * User: Balon
 * Date: 07.02.2015
 * Time: 17:35
 */

namespace Controller;
use Balon\System;

class User extends System\Controller{

    function __construct()
    {
        $this->model = new \Model\User();
        $this->view = new \View\User();
        // TODO: Implement __construct() method.
    }

    public function index()
    {
    }

    public function registration() {
        echo "ok";
    }
} 