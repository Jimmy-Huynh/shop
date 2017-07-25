<?php
require 'view/BaseView.php';
class BaseController {
    public $view;
    public $model;
    public function __construct() {
        $this->view = new BaseView();
    }
}
