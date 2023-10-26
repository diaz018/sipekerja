<?php

class Mitra_model extends CI_model{

    public function getMitraById($id){
        $this->db->select('*');
        $this->db->from('mitra');
        $this->db->where('id_sobat', $id);
        return $this->db->get()->result_array();
    }

}