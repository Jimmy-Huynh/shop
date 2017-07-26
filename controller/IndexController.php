<?php

class IndexController extends BaseController{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $data = array(
            'products' => $GLOBALS['products']
        );
        $this->view->render('home/index', $data);
    }
    public function detail($id){
        $data = array();
        foreach ($GLOBALS['products'] as $key =>$value){
            if($value['id'] == $id){
                $data = $value;
                break;
            }
        }
        
        $this->view->render('home/detail',$data);
    }
}
