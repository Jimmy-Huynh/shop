<?php
session_start();
//define constants SITE_ROOT
defined('SITE_ROOT') or define('SITE_ROOT', 'http://localhost/shop/');
//setup fakeData
$fakeData = require 'data/fakeData.php';
$products = $fakeData['products'];
$users = $fakeData['users'];

//require BaseController
require 'controller/BaseController.php';

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

        $con = $url[0] . 'Controller';
        $controller = new $con;
    } else {
        require 'controller/ErrorController.php';
        $controller = new ErrorController();
        $controller->index();
        return FALSE;
    }
    if (isset($url[2])) {
        if (method_exists($controller, $url[1])) {
            $controller->{$url[1]}($url[2]);
        } else {
            $this->error();
        }
    } else if (isset($url[1])) {
        if (method_exists($controller, $url[1])) {
            $controller->{$url[1]}();
        } else {
            $this->error();
        }
    }else{
        $controller->index();
    }
}


