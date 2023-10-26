<?php

class Penilaian_model extends CI_model{

    public function getPenilaianPerMitra(){
        $this->db->select('*, ROUND(AVG(kualitas_pekerjaan),2) as avg_kualitas_pekerjaan, 
                            ROUND(AVG(ketepatan_waktu),2) as avg_ketepatan_waktu, 
                            ROUND(AVG(etika),2) as avg_etika, ROUND(AVG(komunikasi),2) as avg_komunikasi, 
                            ROUND(AVG(inisiatif),2) as avg_inisiatif, 
                            COUNT(penilaian.id_sobat) as jumlah_riwayat');
        $this->db->from('penilaian');
        $this->db->join('mitra', 'penilaian.id_sobat = mitra.id_sobat', 'left');
        $this->db->group_by('penilaian.id_sobat');
        return $this->db->get()->result_array();
    }

    public function getPenilaianById($id){
        $this->db->select('kualitas_pekerjaan, ketepatan_waktu, etika, komunikasi,inisiatif, 
                            pegawai.nama as nama_pegawai, mitra.nama as nama_mitra,
                            mitra.id_sobat as id_sobat, id_penilaian, id_kegiatan');
        $this->db->from('penilaian');
        $this->db->join('mitra', 'penilaian.id_sobat = mitra.id_sobat', 'left');
        $this->db->join('pegawai', 'penilaian.nip_pegawai = pegawai.nip_pegawai', 'left');
        $this->db->where('id_kegiatan', $id);
        return $this->db->get()->result_array();
    }

    public function getIdPenilaianByKegiatan($id){
        $this->db->select('id_penilaian');
        $this->db->from('penilaian');
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
        $this->db->update('penilaian');
            
   }

}