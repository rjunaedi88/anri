<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Arsip_masuk extends CI_Controller{

  public function __construct(){
    parent::__construct();

    if ($this->session->userdata('username') == null) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
      redirect('auth/login');
    }
  }


  public function index()
  {
    $data['title'] = 'Arsip Masuk';
    $data['data'] = $this->Model_masuk->tampil_data()->result();
    $this->load->view('templete/header', $data);
    $this->load->view('templete/sidebar');
    $this->load->view('arsip_masuk/view', $data);
    $this->load->view('templete/footer');

  }


  public function input_data()
  {
  	$this->form_validation->set_rules('tanggal_penerimaan', 'Tanggal', 'trim|required');
  	$this->form_validation->set_rules('provenance', 'Provenance','trim|required');
  	$this->form_validation->set_rules('no_arsip', 'No Arsip', 'trim|required');
  	$this->form_validation->set_rules('jenis_arsip', 'Jenis Arsip', 'trim|required');
  	$this->form_validation->set_rules('jumlah_halaman', 'Jumlah Halaman', 'trim|required');
  	$this->form_validation->set_rules('informasi_arsip', 'Informasi Arsip', 'trim|required');
  	$this->form_validation->set_rules('disimpan', 'Proses Pengerjaan', 'trim|required');
  	$this->form_validation->set_rules('penerima', 'Penerima', 'trim|required');
  	$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

  	// var_dump($this->form_validation->run());exit();
  	if($this->form_validation->run() != true){
  		$data['title'] = 'Arsip Masuk | Input Data';
  		$this->load->view('templete/header', $data);
	    $this->load->view('templete/sidebar');
	    $this->load->view('arsip_masuk/add');
	    $this->load->view('templete/footer');
  	}else {
  		// $oke = "oke";
  		// var_dump($oke);
  		// exit();
  		// $id = $this->Model_masuk->generate_id();
  		
  		$array = array (
  			// 'id'					=> $this->input->post('tanggal_penerimaan'),
  			'tanggal_penerimaan'	=> $this->input->post('tanggal_penerimaan'),
  			'provenance'			=> $this->input->post('provenance'),
  			'no_arsip'				=> $this->input->post('no_arsip'),
  			'jenis_arsip'			=> $this->input->post('jenis_arsip'),
  			'jumlah_halaman'		=> $this->input->post('jumlah_halaman'),
  			'informasi_arsip'		=> $this->input->post('informasi_arsip'),
  			'disimpan'		=> $this->input->post('disimpan'),
        'dikerjakan'    => $this->input->post('dikerjakan'),
  			'penerima'				=> $this->input->post('penerima'),
  			'keterangan'			=> $this->input->post('keterangan')
  		);
  		
  		$this->Model_masuk->add($array, 'arsip_masuk');
  		$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses</strong> , data berhasil disimpan.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
			redirect('arsip_masuk');
  	}


  }

  public function edit($id){

  	$arsip = $this->Model_masuk->getDataById($id)->result();
  	// var_dump($arsip);exit();
  	
  	$this->form_validation->set_rules('tanggal_penerimaan', 'Tanggal', 'trim|required');
  	$this->form_validation->set_rules('provenance', 'Provenance','trim|required');
  	$this->form_validation->set_rules('no_arsip', 'No Arsip', 'trim|required');
  	$this->form_validation->set_rules('jenis_arsip', 'Jenis Arsip', 'trim|required');
  	$this->form_validation->set_rules('jumlah_halaman', 'Jumlah Halaman', 'trim|required');
  	$this->form_validation->set_rules('informasi_arsip', 'Informasi Arsip', 'trim|required');
  	$this->form_validation->set_rules('disimpan', 'Proses Pengerjaan', 'trim|required');
  	$this->form_validation->set_rules('penerima', 'Penerima', 'trim|required');
  	$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

  	if($this->form_validation->run() != true){
  		$data['title'] 	= 'Edit Data';
  		$data['arsip']	= $arsip;
  		$this->load->view('templete/header', $data);
	    $this->load->view('templete/sidebar');
	    $this->load->view('arsip_masuk/edit', $data);
	    $this->load->view('templete/footer');
  	}else {
  		$array = array (
  			'id'					=> $this->input->post('id'),
  			'tanggal_penerimaan'	=> $this->input->post('tanggal_penerimaan'),
  			'provenance'			=> $this->input->post('provenance'),
  			'no_arsip'				=> $this->input->post('no_arsip'),
  			'jenis_arsip'			=> $this->input->post('jenis_arsip'),
  			'jumlah_halaman'		=> $this->input->post('jumlah_halaman'),
  			'informasi_arsip'		=> $this->input->post('informasi_arsip'),
  			'disimpan'		=> $this->input->post('disimpan'),
        'dikerjakan'    => $this->input->post('dikerjakan'),
  			'penerima'				=> $this->input->post('penerima'),
  			'keterangan'			=> $this->input->post('keterangan')
  		);
  		$this->Model_masuk->updateData($id,$array);
  		$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses</strong> , data berhasil diubah.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
			redirect('arsip_masuk');
  	}

  }

  public function hapus($id){
  	$where = array('id'=> $id);
  	$this->Model_masuk->hapusData($where, 'arsip_masuk');

   $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Sukses</strong> , data berhasil dihapus.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
		redirect('arsip_masuk');
  }

}