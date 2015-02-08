<?php
/**
 * Created by PhpStorm.
 * User: Balon
 * Date: 07.02.2015
 * Time: 17:35
 */

namespace Controller;
use Balon\Date;
use Balon\System;
use Parse\ParseException;
use Parse\ParseUser;

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
        $this->view->registration();
    }

    public function checkUser() {
        if ($_GET['email'] && $_GET['pass']) {
            $this->model->checkUser();
        }
    }

    public function addUser() {
        if ($_GET['password'] == $_GET['confirm']) {
            $this->model->addUser();
            header("Location:".SITE."Events?access=true");
        }
        else {
            header("Location:".SITE."User/registration?error=1");//if password != confirm go to the registration
            // TODO location
        }
    }

} 