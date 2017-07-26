<?php

require 'view/BaseView.php';

class BaseController {

    public $view;
    public $model;
    public $activeView = "Index";

    public function __construct() {
        $this->view = new BaseView();
    }

    public function getData() {
        if (isset($_POST)) {
            foreach ($_POST as $key =>$value){
                $this->$key = $value;
            }
            return TRUE;
        }else{
            return FALSE;
        }
    }

}
