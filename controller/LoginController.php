<?php
require 'model/UsersModel.php';
class LoginController extends BaseController{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $u = new UsersModel();
        print_r($u->getAll());
        $this->view->render('login/index');
    }
    public function Login(){
        $this->model = require 'model/UsersModel.php';
        
    }
}
