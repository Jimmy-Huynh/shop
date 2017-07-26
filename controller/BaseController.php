<?php

require 'view/BaseView.php';

class BaseController {

    public $view;
    public $model;
    public $postData;
    public $activeView = "Index";

    public function __construct() {
        $this->view = new BaseView();
    }

    public function getData() {
        if (isset($_POST)) {
            $this->postData = $_POST;
        }
    }

}
