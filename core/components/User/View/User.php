<?php
/**
 * Created by PhpStorm.
 * User: Balon
 * Date: 07.02.2015
 * Time: 17:35
 */

namespace View;
use Balon\System;

class User extends System\View{

    function __construct()
    {
        // TODO: Implement __construct() method.
    }

    public function index()
    {

    }

    public function show($data)
    {
        $events = $data[1];
        $data = $data[0];
        $this->loadHead();
        $this->loadHeader();
        include('view/open_page.php');
        include('view/page/navigation.php');
        include('view/page/profile.php');
        include('view/close_page.php');
        $this->loadFooter();
        $this->loadModal();
    }

    public function registration() {
        $this->loadHead();
        include_once("view/register.php");
    }

    public function friends()
    {

        $this->loadHead();
        $this->loadHeader();
        include('view/open_page.php');
        include('view/page/navigation.php');
        include('view/page/friends.php');
        include('view/close_page.php');
        $this->loadFooter();
        $this->loadModal();
    }
}