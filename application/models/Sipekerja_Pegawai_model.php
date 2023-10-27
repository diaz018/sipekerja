<?php

class Sipekerja_Pegawai_model extends CI_model{

    public function getPegawai(){
        $this->db->select('*');
        $this->db->from('sipekerja_pegawai');
        return $this->db->get()->result_array();
    }

}