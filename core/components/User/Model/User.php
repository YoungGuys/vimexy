<?php
/**
 * Created by PhpStorm.
 * User: Balon
 * Date: 07.02.2015
 * Time: 17:35
 */

namespace Model;
use Balon\System;
use Parse\ParseException;
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseUser;

class User extends System\Model{

    function __construct()
    {
        // TODO: Implement __construct() method.
    }

    public function index()
    {

    }

    public function checkUser() {
        $pass = $_GET['pass'];
        $email = $_GET['email'];
        try {
            ParseUser::logIn($email, $pass);
            header("Location:".SITE);
        } catch (ParseException $error) {
            echo "Bad pass";
        }
    }

    public function addUser() {

    }
}