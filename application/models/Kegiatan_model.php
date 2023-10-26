<?php

class Kegiatan_model extends CI_model{

    public function setKegiatan(Array $data)
   {
      $this->db->insert('kegiatan', $data);
   }

    public function getKegiatan($jenis_kegiatan = "",$jenis_sampel = "", $jenis_bidang ="" ){
        // $query = $this->db->get('kegiatan');
        // return $query->result_array();
        
        $this->db->select('*');
        $this->db->from('kegiatan');

        if($jenis_kegiatan != ""){
            if($jenis_kegiatan != "Lainnya"){
                $this->db->where('jenis_kegiatan', $jenis_kegiatan);
            } else {
                $names = array("Lapangan", "Pengolahan");
                $this->db->where_not_in('jenis_kegiatan', $names);
            }
        }
        if($jenis_sampel != ""){
            if($jenis_sampel != "Lainnya"){
                $this->db->where('jenis_sampel', $jenis_sampel);
            } else {
                $names = array("Perusahaan", "Rumah Tangga");
                $this->db->where_not_in('jenis_sampel', $names);
            }
            
        }
        if($jenis_bidang != ""){
            if($jenis_bidang != "Lainnya"){
                $this->db->where('jenis_bidang', $jenis_bidang);
            } else {
                $names = array("Sosial Kependudukan", "Ekonomi", "Pertanian");
                $this->db->where_not_in('jenis_sampel', $names);
            }  
        }
        

        // $this->db->join('seleksi_peserta', 'seleksi_uji.no_urut = seleksi_peserta.no_urut');
        return $this->db->get()->result_array();
    }

    public function getKegiatanById($id ){
        $this->db->select('*');
        $this->db->from('kegiatan');
        $this->db->where('id_kegiatan', $id);
        return $this->db->get()->result_array();
    }

    public function getKegiatanAktif(){
        $this->db->select('*');
        $this->db->from('kegiatan');
        $this->db->where('status', 1);
        return $this->db->get()->result_array();
    }

    public function deleteKegiatanById($id ){
        $this -> db -> where('id_kegiatan', $id);
        $this -> db -> delete('kegiatan');
    }

    public function ubahStatusKegiatanById($id, $status){
        if($status == 1){
            $this->db->set('status', 0);
        } else {
            $this->db->set('status', 1);
        }
        $this->db->where('id_kegiatan', $id);
        $this->db->update('kegiatan');
    }
}