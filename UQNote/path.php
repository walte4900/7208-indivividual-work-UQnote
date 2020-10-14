<?php
define("ROOT_PATH", realpath(dirname(__FILE__)));

$currentPath = $_SERVER['PHP_SELF'];
$pathInfo = pathinfo($currentPath);
$hostName = $_SERVER['HTTP_HOST'];
$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://' ? 'https://' : 'http://';
$path = $protocol.$hostName.$pathInfo['dirname'];

define("BASE_URL", $path);