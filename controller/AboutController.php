<?php
class AboutController extends BaseController{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->activeView = "About";
        $this->view->render('about/index');
    }
}
