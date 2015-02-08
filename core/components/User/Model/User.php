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
        $date->setDate($_GET['year'], intval($_GET['month']), $_GET['day']);
        $user->set("birthDate",$date);
        $user->signUp();
    }
}