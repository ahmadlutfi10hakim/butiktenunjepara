<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material_model extends CI_Model {

    public function get_all_materials() {
        $query = $this->db->get('tbl_stock'); // Tabel 'tbl_stock' digunakan untuk mengambil data bahan baku
        return $query->result();
    }
}
