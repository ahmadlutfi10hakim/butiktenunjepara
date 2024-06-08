<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Material_model');
    }

    public function get_material_list() {
        $materials = $this->Material_model->get_all_materials();

        $result = array();
        foreach ($materials as $material) {
            $result[] = array(
                'id_stock' => $material->id_stock,
                'nama_stock' => $material->nama_stock,
            );
        }

        echo json_encode($result);
    }

    public function add_material() {
        $data = array(
            'bahan_baku_id' => $this->input->post('material_id'),
            'jumlah' => $this->input->post('quantity'),
            'produksi_stock_user_id' => $this->session->userdata('user_id')
        );
        $this->db->insert('tbl_produksi_stock', $data);
        echo json_encode(array("status" => TRUE));
    }
}
