<?php

class BaseModel {

    public $db;

    public function __construct() {
        $this->db = new Connection();
    }

    public function exec($req) {
        $sql = $this->db->prepare($req);
        if ($sql->execute()) {
            if ($this->is_insert_into($sql->queryString)) {
                return TRUE;
            } else if ($this->is_update_delete($sql->queryString)) {
                if ($sql->rowCount() > 0) {
                    return TRUE;
                }
                return FALSE;
            } else {
                $data = $sql->fetchAll(\PDO::FETCH_OBJ);
                return $data;
            }
        } else {
            return FALSE;
        }
    }

    public function is_insert_into($sql) {
        $req = explode(' ', $sql);

        if (strtoupper($req[0]) == "INSERT" AND strtoupper($req[1]) == "INTO") {
            return true;
        }
        return false;
    }

    public function is_update_delete($sql) {
        $req = explode(' ', $sql);

        if ((strtoupper($req[0]) == "UPDATE" AND strtoupper($req[2]) == "SET") || (strtoupper($req[0]) == "DELETE")) {
            return true;
        }
        return false;
    }

}
