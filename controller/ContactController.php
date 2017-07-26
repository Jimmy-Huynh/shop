<?php

class ContactController extends BaseController{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->activeView = "Contact";
        $this->view->render('contact/index');
    }
}
