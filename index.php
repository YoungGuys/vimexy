<?php

        /**
        * @author balon
        * @copyright 2014
        */


session_start();
ini_set("error_reporting",3);
ini_set("display_errors","On");
ini_set("mode_resrite","On");


define('DOCROOT', dirname(__FILE__));

require 'config.php';
require 'vendor/autoload.php';
require 'core/lib/php/autoloader.php';

use Balon\Routing;
use Parse\ParseObject;

use Parse\ParseClient;


ParseClient::initialize(
    'EwDEXNgcJ1rEbMgJptFTmDDkC0hkzUfDd8SYYkWz',
    'hGIUgsZ3QGMKOhPrV99GGoN90sv7HGBUpJ6zeBHt',
    '4BQcr7OGa8WisPeYAUFvJoa5c5ALYQaRtNxMR24l'
);

define("DEV_MOD",1);

$testObject = ParseObject::create("TestObject");
$testObject->set("foo", "111");
$testObject->save();

$rout = new Routing();
$rout->loadPage();


?>
