<?php


require(__DIR__ . '/config/config.php');

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = explode('/',$url);



if((isset($url[1]) && $url[1] != 'api') || (isset($url[2]) && $url[2] != 'v1' )){
    header("HTTP/1.1 404 Not Found");
    exit();
}else if((isset($url[3]) && $url[3] != 'user') || !isset($url[4])){
    header("HTTP/1.1 404 Not Found");
    exit();

}

require ROOT_PATH . "/Controller/API/UserController.php";

$user = new UserController();

$methodName = $url[4] . 'Action';
$user->{$methodName}();
