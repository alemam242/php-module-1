<?php

/**
 * * There are 6 builtin super-global variables in PHP
 * ? $_GET
 * ? $_POST
 * ? $_REQUEST
 * ? $_SERVER
 * ? $_COOKIE
 * ? $_SESSION
 * ? $_FILES
 */


echo "<pre>";
print_r($_GET);
print_r($_POST);
print_r($_REQUEST);
print_r("SERVER");
print_r($_SERVER);
print_r("COOKIES");
/**
 * ? How to set COOKIE
 * setcookie(name, value, expire(in second), path, domain, secure, httponly);
 * Ex - setcookie("name", "value", time() + 86400, "/");
 */
print_r($_COOKIE);
// print_r($_SESSION);
print_r("FILES");
print_r($_FILES);
echo "</pre>";
