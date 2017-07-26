<?php
require 'Utils/db/Connection.php';
require 'controller/BaseController.php';
require 'model/BaseModel.php';
$url = isset($_GET['url']) ? $_GET['url'] : NULL;
$url = rtrim($url, '/');
$url = explode('/', $url);
if (empty($url[0])) {
    require 'controller/IndexController.php';
    $controller = new IndexController();
    $controller->index();
    return FALSE;
} else {
    $file = 'controller/' . $url[0] . 'Controller.php';
    if (file_exists($file)) {
        require $file;

        $con = $url[0]. 'Controller';
        $controller = new $con;
        $controller->index();
    } else {
        require 'controller/ErrorController.php';
        $controller = new ErrorController();
        $controller->index();
        return FALSE;
    }
}


