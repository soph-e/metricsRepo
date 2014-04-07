<?php
//require_once __DIR__ . '/smeep/smeep.class.php';

//===================================
//        Server-side Paths
//===================================
define("METRICSFINDER", "/Library/WebServer/Documents/currentprojects/MetricsFinder/");
define("LIBRARY", __DIR__ ."/");
define("SMARTY_PHP", LIBRARY . "Smarty-3.1.16/libs/Smarty.class.php");
define("SMARTY_TEMPLATES", METRICSFINDER . "templates/");
define("SMARTY_TEMPLATES_COMPILE", LIBRARY . "smarty_templates_c/");
//define("pathVariable", pathVar . "/morePath");

define('PYTHON', '/usr/local/Cellar/python/2.7.6/Frameworks/Python.framework/Versions/2.7/Resources/Python.app/Contents/MacOS/Python ');

//ASCII for 'É' -> &#0201; displayed in _layout.tpl (footer)
define("DEVELOPPER", " Marc-&#0201;lie Lapointe");

//===================================
//       Database Credentials
//===================================
define("DB_HOST", "142.157.108.38");
define("DB_USER", "eco_web");
define("DB_PASS", "s3thsh3r3");
define("DB_BASE", "fragdata");

// Fixes a particular Smarty error that occurs on Smarty initialization.
date_default_timezone_set("America/Montreal");




//===================================
//       Error Codes & Output
//===================================
/*
define("ERROR", "<br/><b><em>METALAND</em>:</b> ");
define("MSG_START", "<pre><b><em>METALAND</em>:</b> ");
define("MSG_END", "</pre>");
function message($string)
{
    echo MSG_START . $string . MSG_END;
}
*/

/*
//===================================
//       Client-side Paths
//===================================
define("WEB_METALAND", "/currentprojects/metaland/");   // Starting from root directory included in Apache.
define("WEB_CONTENTS", WEB_METALAND . "contents/");
define("WEB_TEMP", WEB_METALAND . "temp/");
define("WEB_LANDSCAPES", "/currentprojecrs/metrics/images/");
*/