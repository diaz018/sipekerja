<?php

class Penilaian extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Sipekerja_Kegiatan_model');
        $this->load->model('Sipekerja_Penilaian_model');
        $this->load->model('Sipekerja_Mitra_model');
    }

    public function index(){

        $data['judul'] = 'Daftar Penilaian Kinerja Mitra';
        // $data['kegiatan'] = 
        
        $data['kegiatan'] = $this->Sipekerja_Kegiatan_model->getKegiatanAktif();
        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/penilaian/daftar');
        $this->load->view('sipekerja/template/footer');
    }

    public function detail($id = ""){

        $data['judul'] = 'Detail Kegiatan';
        // $data['kegiatan'] = 
        $data['kegiatan'] = $this->Sipekerja_Kegiatan_model->getkegiatanById($id);
        $data['penilaian'] = $this->Sipekerja_Penilaian_model->getPenilaianById($id);
        $data['halaman'] = 'penilaian';

        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/kegiatan/detail');
        $this->load->view('sipekerja/template/footer');
    }

    public function form(){

        $data['judul'] = 'Form Penilaian Kinerja Mitra';
        // $data['kegiatan'] = 
        $data['kegiatan'] = $this->Sipekerja_Kegiatan_model->getKegiatanById($this->input->post("id_kegiatan", true));
        $data['penilaian'] = $this->Sipekerja_Penilaian_model->getPenilaianById($this->input->post("id_kegiatan", true));
        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/penilaian/form');
        $this->load->view('sipekerja/template/footer');
    }

    public function edit(){

        $data['judul'] = 'Edit';
        // var_dump($this->input->post());

        $coba = $this->Sipekerja_Penilaian_model->getIdPenilaianByKegiatan($this->input->post('id_kegiatan', true));
        
        foreach ($this->Sipekerja_Penilaian_model->getIdPenilaianByKegiatan($this->input->post('id_kegiatan', true)) as $data):
            $id = $data['id_penilaian'];
            $this->Sipekerja_Penilaian_model->setPenilaianById($data['id_penilaian'],$this->input->post('kualitas_pekerjaan_'.$id),$this->input->post('ketepatan_waktu_'.$id),$this->input->post('etika_'.$id),$this->input->post('komunikasi_'.$id),$this->input->post('inisiatif_'.$id) );
        endforeach;

        redirect($this->router->class."/detail/".$this->input->post('id_kegiatan', true));

    }

    public function rekap_mitra(){

        $data['judul'] = 'Daftar Rekap Mitra';

        $data['jenis_kegiatan'] = $this->input->post('jenis_kegiatan');
        $data['jenis_sampel'] = $this->input->post('jenis_sampel');
        $data['jenis_bidang'] = $this->input->post('jenis_bidang');

        $data['penilaian'] = $this->Sipekerja_Penilaian_model->getPenilaianPerMitra();
        // var_dump($data);
        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/rekap/daftar_mitra');
        $this->load->view('sipekerja/template/footer');
    }

    public function detail_mitra($id=""){

        $data['judul'] = 'Detail Rekap Mitra';

        $data['penilaian'] = $this->Sipekerja_Penilaian_model->getPenilaianByMitra($id);
        $data['mitra'] = $this->Sipekerja_Mitra_model->getMitraById($id);
        
        // var_dump($data);
        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/rekap/detail_mitra');
        $this->load->view('sipekerja/template/footer');
    }
    
    public function rekap_kegiatan(){

        $data['judul'] = 'Daftar Rekap Kegiatan';

        $data['jenis_kegiatan'] = $this->input->post('jenis_kegiatan');
        $data['jenis_sampel'] = $this->input->post('jenis_sampel');
        $data['jenis_bidang'] = $this->input->post('jenis_bidang');

        $data['kegiatan'] = $this->Sipekerja_Penilaian_model->getPenilaianPerKegiatan();
        $this->load->view('sipekerja/template/header', $data);
        $this->load->view('sipekerja/rekap/daftar_kegiatan');
        $this->load->view('sipekerja/template/footer');
    }

    public function coba(){
        
        $this->load->view('coba');
        
    }

    public function export(){
        require_once dirname(__DIR__).'/third_party/PHPExcel-1.8/Classes/PHPExcel.php';
        // include APPPATH.'/third_party/PHPExcel/PHPExcel.php';

        // include APPPATH.'/third_party/PHPExcel-1.8/Classes/PHPExcel.php';
        // $excel = new PHPExcel;
        // $excel->getProperties()->setTitle('contoh');
        // $excel->setActiveSheetIndex(0)->setCellValue('A1', 'Halo');        
    }

    public function import(){

        include APPPATH.'/third_party/PHPExcel-1.8/Classes/PHPExcel.php';
        // $this->load->('upload', $config);
        // $excelreader = new PHPExcel_Reader_Excel2007();
        // $loadExcel = $excelreader->load($_FILES['file']['name']);
        // $objWorksheet = $loadExcel->getActiveSheet();

        // $msg = null;
		// $tanggal = date('Y-m-d');
		if(!empty($this->input->post()) && !empty($_FILES['file'])) {
           // print_r($_FILES); exit();
			// $tanggal = $this->input->post('tanggal');

			// require_once dirname(__DIR__).'/third_party/PHPExcel-1.8/Classes/PHPExcel.php';
			$objReader = PHPExcel_IOFactory::createReader('Excel2007');
			$objReader->setReadDataOnly(true);
			$objPHPExcel = $objReader->load($_FILES['file']['tmp_name']);
			// $objWorksheet = $objPHPExcel->getActiveSheet();

			// $highestRow = $objWorksheet->getHighestRow();
			// $highestColumn = $objWorksheet->getHighestColumn();
			// $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
			
			// $c = 0;
            // $p = '';
			// for ($row = 2; $row <= $highestRow; ++$row) {
			// 	$id = $objWorksheet->getCellByColumnAndRow(0, $row)->getValue();
			// 	$nama = str_ireplace("'","`",$objWorksheet->getCellByColumnAndRow(1, $row)->getValue());
			// 	for ($col = 2; $col <= $highestColumnIndex; ++$col) {
			// 		$v = str_ireplace("'","`",trim($objWorksheet->getCellByColumnAndRow($col, $row)->getValue()));
			// 		if(strlen($v)>1){
			// 			foreach(explode(";", $v) as $x){
            //                 $p = $p + $x;
			// 				// if(strlen($x)>5){
			// 				// 	$this->db->query("INSERT ignore INTO t_revalidasi (tanggal, id_rt, nama, error_msg) VALUES ('".$tanggal."', '".$id."', '".$nama."', '".trim($x)."')");
			// 				// 	if($this->db->affected_rows())
			// 				// 		$c++;
			// 				// }
			// 			}
			// 		}
			// 	}
			// }
            
			// $msg = $_FILES['userfile']['name']."\n".($row-1).' baris, '.$c.' ErrorMsg diproses';
            // echo $msg;
            // var_dump($p);
		}
    }

}