<?php
class LoginController extends BaseController{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->view->render('login/index');
    }
    public function Login(){
        
    }
}
