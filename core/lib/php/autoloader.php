<?php

/**
 * @author balon
 * @copyright 2013
 */
spl_autoload_register(function ($class_name)
{
    if (explode("\\",$class_name)) {
        $array = explode("\\",$class_name);
        if ($array[1]) {
            $namespace = $array[0];
            $class_name = array_pop($array);
        }
    }
    if (file_exists(DOCROOT."/"."core/components/" . $class_name . "/" . $class_name . ".php"))
    {
        include_once (DOCROOT."/"."core/components/" . $class_name . "/" . $class_name . ".php");
    }
    if (file_exists(DOCROOT."/"."core/components/$class_name/$namespace/$class_name.php")) {
        include_once(DOCROOT."/"."core/components/$class_name/$namespace/$class_name.php");
    }
    if (file_exists(DOCROOT."/"."core/lib/php/" . $class_name . ".lib.php"))
    {
        include_once (DOCROOT."/"."core/lib/php/" . $class_name . ".lib.php");
    }
    if (file_exists(DOCROOT."/"."../core/lib/php/" . $class_name . ".lib.php"))
    {
        include_once (DOCROOT."/"."../core/lib/php/" . $class_name . ".lib.php");
    }
    if (file_exists(DOCROOT."/"."../../core/lib/php/" . $class_name . ".lib.php"))
    {
        include_once (DOCROOT."/"."../../core/lib/php/" . $class_name . ".lib.php");
    }
    if (file_exists(DOCROOT."/"."core/system/" . $class_name . "/" . $class_name . ".php"))
    {
        include_once (DOCROOT."/"."core/system/" . $class_name . "/" . $class_name . ".php");
    }
    if (file_exists(DOCROOT."/"."../core/system/" . $class_name . "/" . $class_name . ".php"))
    {
        include_once (DOCROOT."/"."../core/system/" . $class_name . "/" . $class_name . ".php");
    }
    if (file_exists(DOCROOT."/"."../../core/system/" . $class_name . "/" . $class_name . ".php"))
    {
        include_once (DOCROOT."/"."../../core/system/" . $class_name . "/" . $class_name . ".php");
    }
    if (file_exists(DOCROOT."/"."../core/components/" . $class_name . "/" . $class_name . ".php"))
    {
        include_once (DOCROOT."/"."../core/components/" . $class_name . "/" . $class_name . ".php");
    }
    if (file_exists(DOCROOT."/"."../../core/components/" . $class_name . "/" . $class_name . ".php"))
    {
        include_once (DOCROOT."/"."../../core/components/" . $class_name . "/" . $class_name . ".php");
    }
})

?>