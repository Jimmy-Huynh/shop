<?php

class SignUpController extends BaseController{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->view->render('signup/index');
    }
}
