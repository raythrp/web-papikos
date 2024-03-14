<?php

namespace App\Models;

use CodeIgniter\Model;

class KosModel extends Model {
    function __construct() {
        $this->db = db_connect();
        $this->table = "kos";
    }

    function getData() {
        return $this->db->table($this->table)->get()->getResultArray();
    }

    function findPemilik($email) {
        return $this->db->table($this->table)->getWhere(['email_pemilik' => $email])->getResultArray();
    }

    function findData($id_kos) {
        return $this->db->table($this->table)->getWhere(['id_kos' => $id_kos])->getFirstRow();
    }

    function findKategori($kategori) {
        return $this->db->table($this->table)->getWhere(['kategori' => $kategori], 3)->getResultArray();
    }

    function getKategori($kategori) {
        return $this->db->table($this->table)->getWhere(['kategori' => $kategori])->getResultArray();
    }

    function insertData($data) {
        return $this->db->table($this->table)->insert($data);
    }

    function updateData($id, $data) {
        return $this->db->table($this->table)->update($data, ['id_kos' => $id]);
    }

    function deleteData($id) {
        return $this->db->table($this->table)->delete(['id_kos'=> $id]);
    }
}
?>