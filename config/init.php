<?php

//debug mode
define("DEBUG", 1);
//paths
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . "/public");
define("APP", ROOT . "/app");
define("CORE", ROOT . "/vendor/eshop/core");
define("LIBS", ROOT . "/vendor/eshop/core/libs");
define("CACHE", ROOT . "/tmp/cache");
define("CONF", ROOT . "/config");
define("VENDOR", ROOT . "/vendor");
//default layout
define("LAYOUT", ROOT . "default");
//host path
$app_path = preg_replace("#[^/]+$#", "", "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}");
$app_path = str_replace("/public/", "", $app_path);
define("PATH", $app_path);
define("ADMIN", $app_path . "/admin");
//
require_once VENDOR . "/autoload.php";