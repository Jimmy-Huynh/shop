<?php

class CartController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if(isset($_SESSION['myCart'])){
            $data = array(
              'products' => $_SESSION['myCart']
            );
        }else{
            $data = array(
                'products' => NULL
            );
        }
        $this->view->render('cart/index', $data);
    }

    public function addCart($id) {
        foreach ($GLOBALS['products'] as $key => $value) {
            if ($value['id'] == $id) {
                if (!isset($_SESSION['myCart'])) {
                    $_SESSION['myCart'] = array();
                }
                array_push($_SESSION['myCart'], $value);
            }
        }
        header("Location: " . SITE_ROOT . 'index/detail/' . $id);
        die();
    }
    
    public function deleteCart($id){
        unset($_SESSION['myCart'][$id]);
        return "OK";
    }

}
