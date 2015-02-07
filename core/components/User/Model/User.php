<?php
/**
 * Created by PhpStorm.
 * User: Balon
 * Date: 07.02.2015
 * Time: 17:35
 */

namespace Model;
use Balon\System;
use Parse\ParseQuery;

class User extends System\Model{

    function __construct()
    {
        // TODO: Implement __construct() method.
    }

    public function index()
    {

    }

    public function checkUser() {
        $name = $_GET['name'];
        $pass = $_GET['pass'];
        $query = new ParseQuery("User");
        $result = $query->get("2s306ZpwGD");
        var_dump($result);
        $query->equalTo("username","reg_box@ukr.nete");
        $result = $query->find();
        var_dump($result);
    }
}