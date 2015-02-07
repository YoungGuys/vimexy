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
            $user = new ParseUser();
            $user->set("username", $_GET['email']);
            $user->set("password", $_GET['password']);
            $user->set("email", $_GET['email']);
            $user->set("firstName", $_GET['name']);
            $user->set("lastName", $_GET['lastname']);

            if ($_GET['sex'] == "man") {
                $user->set("gender", "M");
            } elseif ($_GET['sex'] == "girl") {
                $user->set("gender", "F");
            }

            $user->set("city", $_GET['city']);

            $date = new \DateTime();
            $date->setDate($_GET['year'],$_GET['month'],$_GET['day']);

            $user->set("birthDay",$date);
            $user->signUp();
        }
        else {
            header("Location:".SITE."/User/registration?error=1");//if password != confirm go to the registration
            // TODO location
        }
    }

} 