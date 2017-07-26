<?php

class UsersModel extends BaseModel {

    private $tableName = "user";

    function __construct() {
        parent::__construct();
    }
    
    public function getAll() {
        return parent::getAll($this->tableName);
        
    }

}
