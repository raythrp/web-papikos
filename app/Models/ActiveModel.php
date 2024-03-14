<?php

namespace App\Models;

use CodeIgniter\Model;

class ActiveModel extends Model {
    function __construct() {
        $this->db = db_connect();
        $this->table = "active";
    }

    function getCount($id_kos) {
        return $this->db->table($this->table)->getWhere(['id_kos' => $id_kos])->getNumRows();
    }

    function getid_kos($email) {
        return $this->db->table($this->table)->getWhere(['email_penyewa' => $email])->getRowArray();
    }

    function getemail_penyewa($id_kos) {
        return $this->db->table($this->table)->getWhere(['$id_kos' => $id_kos])->getRowArray();
    }

    function insertData($data) {
        return $this->db->table($this->table)->insert($data);
    }
    
    function deleteData($email) {
        return $this->db->table($this->table)->delete(['email_penyewa'=> $email]);
    }
}
?>