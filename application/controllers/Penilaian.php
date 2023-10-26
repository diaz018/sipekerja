<?php

class Penilaian extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Kegiatan_model');
        $this->load->model('Penilaian_model');
    }

    public function index(){

        $data['judul'] = 'Daftar Penilaian Kinerja Mitra';
        // $data['kegiatan'] = 
        
        $data['kegiatan'] = $this->Kegiatan_model->getKegiatanAktif();
        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/penilaian/daftar');
        $this->load->view('sipekerja/template/footer');
    }

    public function detail($id = ""){

        $data['judul'] = 'Detail Kegiatan';
        // $data['kegiatan'] = 
        $data['kegiatan'] = $this->Kegiatan_model->getkegiatanById($id);
        $data['penilaian'] = $this->Penilaian_model->getPenilaianById($id);
        $data['halaman'] = 'penilaian';

        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/kegiatan/detail');
        $this->load->view('sipekerja/template/footer');
    }

    public function form(){

        $data['judul'] = 'Form Penilaian Kinerja Mitra';
        // $data['kegiatan'] = 
        $data['kegiatan'] = $this->Kegiatan_model->getKegiatanById($this->input->post("id_kegiatan", true));
        $data['penilaian'] = $this->Penilaian_model->getPenilaianById($this->input->post("id_kegiatan", true));
        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/penilaian/form');
        $this->load->view('sipekerja/template/footer');
    }

    public function edit(){

        $data['judul'] = 'Edit';
        // $data['kegiatan'] = 
        var_dump($this->input->post());
        // $this->Penilaian_model->setPenilaianById();
        $coba = $this->Penilaian_model->getIdPenilaianByKegiatan($this->input->post('id_kegiatan'), true);
        // var_dump($coba);
        
        foreach ($this->Penilaian_model->getIdPenilaianByKegiatan($this->input->post('id_kegiatan'), true) as $data):
            $id = $data['id_penilaian'];
            $this->Penilaian_model->setPenilaianById($data['id_penilaian'],$this->input->post('kualitas_pekerjaan_'.$id),$this->input->post('ketepatan_waktu_'.$id),$this->input->post('etika_'.$id),$this->input->post('komunikasi_'.$id),$this->input->post('inisiatif_'.$id) );
        endforeach;

    }

    public function rekap_mitra(){

        $data['judul'] = 'Daftar Rekap Mitra';

        $data['jenis_kegiatan'] = $this->input->post('jenis_kegiatan');
        $data['jenis_sampel'] = $this->input->post('jenis_sampel');
        $data['jenis_bidang'] = $this->input->post('jenis_bidang');

        $data['penilaian'] = $this->Penilaian_model->getPenilaianPerMitra();
        // var_dump($data);
        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/rekap/daftar_mitra');
        $this->load->view('sipekerja/template/footer');
    }
    
    public function rekap_kegiatan(){

        $data['judul'] = 'Daftar Rekap Kegiatan';

        $data['jenis_kegiatan'] = $this->input->post('jenis_kegiatan');
        $data['jenis_sampel'] = $this->input->post('jenis_sampel');
        $data['jenis_bidang'] = $this->input->post('jenis_bidang');

        $data['kegiatan'] = $this->Kegiatan_model->getkegiatan();
        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/rekap/daftar_kegiatan');
        $this->load->view('sipekerja/template/footer');
    }

    // public function coba(){

    //     $data['judul'] = 'Coba';

    //     echo floor(99 / 100, );
    // }

}