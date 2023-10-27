<?php

class Sipekerja_Penilaian_model extends CI_model{

    public function getPenilaianPerMitra(){
        $this->db->select('*, ROUND(AVG(kualitas_pekerjaan),2) as avg_kualitas_pekerjaan, 
                            ROUND(AVG(ketepatan_waktu),2) as avg_ketepatan_waktu, 
                            ROUND(AVG(etika),2) as avg_etika, ROUND(AVG(komunikasi),2) as avg_komunikasi, 
                            ROUND(AVG(inisiatif),2) as avg_inisiatif, 
                            COUNT(sipekerja_penilaian.id_sobat) as jumlah_riwayat');
        $this->db->from('sipekerja_penilaian');
        $this->db->join('sipekerja_mitra', 'sipekerja_penilaian.id_sobat = sipekerja_mitra.id_sobat', 'left');
        $this->db->group_by('sipekerja_penilaian.id_sobat');
        return $this->db->get()->result_array();
    }

    public function getPenilaianPerKegiatan(){
        $this->db->select('*, ROUND(AVG(kualitas_pekerjaan),2) as avg_kualitas_pekerjaan, 
                            ROUND(AVG(ketepatan_waktu),2) as avg_ketepatan_waktu, 
                            ROUND(AVG(etika),2) as avg_etika, ROUND(AVG(komunikasi),2) as avg_komunikasi, 
                            ROUND(AVG(inisiatif),2) as avg_inisiatif, 
                            COUNT(sipekerja_penilaian.id_kegiatan) as jumlah_mitra');
        $this->db->from('sipekerja_penilaian');
        $this->db->join('sipekerja_kegiatan', 'sipekerja_penilaian.id_kegiatan = sipekerja_kegiatan.id_kegiatan', 'left');
        $this->db->group_by('sipekerja_penilaian.id_kegiatan');
        return $this->db->get()->result_array();
    }

    public function getPenilaianById($id){
        $this->db->select('kualitas_pekerjaan, ketepatan_waktu, etika, komunikasi,inisiatif, 
                            sipekerja_pegawai.nama as nama_pegawai, sipekerja_mitra.nama as nama_mitra,
                            sipekerja_mitra.id_sobat as id_sobat, id_penilaian, id_kegiatan');
        $this->db->from('sipekerja_penilaian');
        $this->db->join('sipekerja_mitra', 'sipekerja_penilaian.id_sobat = sipekerja_mitra.id_sobat', 'left');
        $this->db->join('sipekerja_pegawai', 'sipekerja_penilaian.nip_pegawai = sipekerja_pegawai.nip_pegawai', 'left');
        $this->db->where('id_kegiatan', $id);
        return $this->db->get()->result_array();
    }

    public function getPenilaianByMitra($id){
        $this->db->select('kualitas_pekerjaan, ketepatan_waktu, etika, komunikasi,inisiatif, 
                            sipekerja_pegawai.nama as nama_pegawai, sipekerja_mitra.nama as nama_mitra,
                            sipekerja_mitra.id_sobat as id_sobat, sipekerja_kegiatan.nama as nama_kegiatan, id_penilaian, 
                            sipekerja_kegiatan.id_kegiatan');
        $this->db->from('sipekerja_penilaian');
        $this->db->join('sipekerja_mitra', 'sipekerja_penilaian.id_sobat = sipekerja_mitra.id_sobat', 'left');
        $this->db->join('sipekerja_pegawai', 'sipekerja_penilaian.nip_pegawai = sipekerja_pegawai.nip_pegawai', 'left');
        $this->db->join('sipekerja_kegiatan', 'sipekerja_penilaian.id_kegiatan = sipekerja_kegiatan.id_kegiatan', 'left');
        $this->db->where('sipekerja_penilaian.id_sobat', $id);
        return $this->db->get()->result_array();
    }
    
    public function getIdPenilaianByKegiatan($id){
        $this->db->select('id_penilaian');
        $this->db->from('sipekerja_penilaian');
        $this->db->where('id_kegiatan', $id);
        return $this->db->get()->result_array();
    }

    public function setPenilaianById($id, $kualitas_pekerjaan,$ketepatan_waktu,$etika,$komunikasi, $inisiatif)
   {
        $data = array(
            'kualitas_pekerjaan' => $kualitas_pekerjaan,
            'ketepatan_waktu' => $ketepatan_waktu,
            'etika' => $etika,
            'komunikasi' => $komunikasi,
            'inisiatif' => $inisiatif
        );
        $this->db->set($data);
        $this->db->where('id_penilaian', $id);
        $this->db->update('sipekerja_penilaian');
            
   }

}