<?php
/**
 * Created by PhpStorm.
 * User: Balon
 * Date: 07.02.2015
 * Time: 21:28
 */

namespace View;
use Balon\System;
use Parse\ParseGeoPoint;
use Parse\ParseObject;

class Events extends System\View{

    function __construct()
    {
        // TODO: Implement __construct() method.
    }

    public function loadList($data)
    {
        $balon = false;
        $organizationList = $data['organizationList'];
        $data = $data['data'];
        $this->loadHead();
        $this->loadHeader();
        include('view/open_page.php');
        include('view/page/navigation.php');
        include('view/page/ivents.php');
        include('view/close_page.php');
        $this->loadFooter();
        $this->loadModal();
    }

    public function loadMyList($data)
    {
        $balon = true;
        $this->loadHead();
        $this->loadHeader();
        include('view/open_page.php');
        include('view/page/navigation.php');
        include('view/page/ivents.php');
        include('view/close_page.php');
        $this->loadFooter();
        $this->loadModal();
    }

    public function show($data) {
        $user = $data['user'][0];
        $comments = $data['comments'];
        $commentsUser = $data['commentsUser'];
        $data = $data['data'];
        $this->loadHead();
        $this->loadHeader();
        include('view/open_page.php');
        include('view/page/navigation.php');
        include('view/page/ivent.php');
        include('view/close_page.php');
        $this->loadFooter();
        $this->loadModal();
    }
}