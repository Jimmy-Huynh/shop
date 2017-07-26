<?php
class BaseModel {

    public $db;

    public function __construct() {
        $this->db = new Connection();
    }

    public function getAll($table) {
        $req = "Select * from " . $table;
        return $this->exec($req);
    }

    public function exec($req) {
        $sql = $this->db->prepare($req);
        if ($sql->execute()) {
            if ($this->is_insert_into($sql->queryString)) {
                return array('status' => true, 'message' => 'Insert data successfully.');
            } else if ($this->is_update_delete($sql->queryString)) {
                $data = array();
                if ($sql->rowCount() > 0) {
                    $data = array('status' => true, 'message' => 'Execute successfully.');
                } else {
                    return array('status' => false, 'message' => 'Error not exist this element.');
                }
                return $data;
            } else {
                $data = $sql->fetchAll(\PDO::FETCH_OBJ);
                return $data;
            }
        } else {
            return array('status' => false, 'message' => 'Error with  your SQL. Please check it again.');
        }
    }

    public function is_insert_into($sql) {
        $req = explode(' ', $sql);

        if ($req[0] == "INSERT" AND $req[1] == "INTO") {
            return true;
        }
        return false;
    }

    public function is_update_delete($sql) {
        $req = explode(' ', $sql);

        if (($req[0] == "UPDATE" AND $req[2] == "SET") || ($req[0] == "DELETE")) {
            return true;
        }
        return false;
    }

}
