<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyewaModel extends Model {
    function __construct() {
        $this->db = db_connect();
        $this->table = "penyewa";
    }

    function getData($username) {
        return $this->db->table($this->table)->getWhere(['email' => $username])->getRowArray();
    }

    function insertData($data) {
        return $this->db->table($this->table)->insert($data);
    }

    function updateData($username, $data) {
        return $this->db->table($this->table)->update($data, ['email' => $username]);
    }

    function deleteData($username) {
        return $this->db->table($this->table)->delete(['email'=> $username]);
    }
}
?>