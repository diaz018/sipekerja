<?php

class Kegiatan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Sipekerja_Kegiatan_model');
        $this->load->model('Sipekerja_Penilaian_model');

    }

    public function index(){

        $data['judul'] = 'Daftar Kegiatan';
        
       
        $data['jenis_kegiatan'] = $this->input->post('jenis_kegiatan');
        $data['jenis_sampel'] = $this->input->post('jenis_sampel');
        $data['jenis_bidang'] = $this->input->post('jenis_bidang');
    
        $data['kegiatan'] = $this->Sipekerja_Kegiatan_model->getkegiatan($this->input->post('jenis_kegiatan'),$this->input->post('jenis_sampel'),$this->input->post('jenis_bidang'));
        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/kegiatan/daftar');
        $this->load->view('sipekerja/template/footer');
    }


    public function tambahkan(){

        $data['judul'] = 'Tambahkan Kegiatan';
        // $data['kegiatan'] = 
        $this->load->model('Sipekerja_Pegawai_model');
        $data['pegawai'] = $this->Sipekerja_Pegawai_model->getPegawai();

        $data['kegiatan'] = $this->Sipekerja_Kegiatan_model->getkegiatan();
        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/kegiatan/tambah');
        $this->load->view('sipekerja/template/footer');
    }

    public function tambah(){
        $data['judul'] = 'Tambah Kegiatan';
        // $data['kegiatan'] = 
        $input = $this->input->post();
        $input['status'] = 1;
        var_dump($input);
        $this->Sipekerja_Kegiatan_model->setKegiatan($input);
        redirect($this->router->class."/");

    }

    public function detail($id = ""){

        $data['judul'] = 'Detail Kegiatan';
        // $data['kegiatan'] = 
        $data['kegiatan'] = $this->Sipekerja_Kegiatan_model->getkegiatanById($id);
        $data['penilaian'] = $this->Sipekerja_Penilaian_model->getPenilaianById($id);
        $data['halaman'] = 'detail';

        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/kegiatan/detail');
        $this->load->view('sipekerja/template/footer');
    }

    

    public function hapus(){

        $data['judul'] = 'Hapus Kegiatan';

        $this->Sipekerja_Kegiatan_model->deleteKegiatanById($this->input->post("id", true));
        
        // $this->session->set_flashdata("flash_data", $this->input->post("id", true));
        redirect($this->router->class."/index");
    }

    public function ubah_status(){

        $data['judul'] = 'Ubah Kegiatan';

        $this->Sipekerja_Kegiatan_model->ubahStatusKegiatanById($this->input->post("id", true), $this->input->post("status", true));
        
        // $this->session->set_flashdata("flash_data", $this->input->post("id", true));
        redirect($this->router->class."/index");
    }
}