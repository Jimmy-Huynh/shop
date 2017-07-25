<?php

class BaseView {

    public $content;

    public function render($name, $data = NULL) {
        //render data for view page.
        if ($data !== NULL) {
            //$this->getData = $data;
            foreach ($data as $key => $value) {
                $this->$key = $value;
            }
        }

        $this->content = 'view/'.$name . '.php';
        require 'layout/main.php';
    }

}
