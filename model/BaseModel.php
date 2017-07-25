<?php
class BaseModel {
    public $db;
    public function __construct() {
        $this->db= new Connection();
    }
}
