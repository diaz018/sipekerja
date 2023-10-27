<?php

class Sipekerja_Mitra_model extends CI_model{

    public function getMitraById($id){
        $this->db->select('*');
        $this->db->from('sipekerja_mitra');
        $this->db->where('id_sobat', $id);
        return $this->db->get()->result_array();
    }

}