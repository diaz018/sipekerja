<?php

class Pegawai_model extends CI_model{

    public function getPegawai(){
        $this->db->select('*');
        $this->db->from('pegawai');
        return $this->db->get()->result_array();
    }

}