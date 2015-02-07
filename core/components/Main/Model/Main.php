<?php

namespace Model;

use Balon\DBProc;

class Main {
    function __construct()
    {
        // TODO: Implement __construct() method.
    }

    function index() {
        $this->db = DBProc::instance();
        $array = $this->db->select("country", false, ['id_country' => ['<','20']]);
        \Control::controllers(["edit","remove"], "country",[1,"id_country"]);

    }

}