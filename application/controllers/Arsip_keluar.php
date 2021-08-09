<?php 

class Arsip_keluar extends CI_Controller {

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
		$data['title'] = 'Arsip Keluar';
	    $data['data'] = $this->Model_keluar->tampil_data()->result();
	    $this->load->view('templete/header', $data);
	    $this->load->view('templete/sidebar');
	    $this->load->view('arsip_keluar/view');
	    $this->load->view('templete/footer');
	}


	public function input_data()
  	{
  	$this->form_validation->set_rules('no_arsip_keluar', 'No Arsip', 'trim|required');
  	$this->form_validation->set_rules('jenis_arsip_keluar', 'Jenis Arsip', 'trim|required');
  	$this->form_validation->set_rules('jml_hlm_keluar', 'Jumlah Halaman', 'trim|required');
  	$this->form_validation->set_rules('dikerjakan_oleh', 'Dikerjakan oleh', 'trim|required');
  	$this->form_validation->set_rules('tgl_penyerahan', 'Tanggal Penyerahan', 'trim|required');
  	$this->form_validation->set_rules('keterangan_keluar', 'Keterangan', 'trim|required');

  	if($this->form_validation->run() != true){
  		$data['title'] = 'Arsip Keluar | Input Data';
  		$this->load->view('templete/header', $data);
	    $this->load->view('templete/sidebar');
	    $this->load->view('arsip_keluar/add');
	    $this->load->view('templete/footer');
  	}else {
  		$array = array (
  			'no_arsip_keluar'	=> $this->input->post('no_arsip_keluar'),
  			'jenis_arsip_keluar'=> $this->input->post('jenis_arsip_keluar'),
  			'jml_hlm_keluar'	=> $this->input->post('jml_hlm_keluar'),
  			'dikerjakan_oleh'	=> $this->input->post('dikerjakan_oleh'),
  			'tgl_penyerahan'	=> $this->input->post('tgl_penyerahan'),
  			'keterangan_keluar'	=> $this->input->post('keterangan_keluar')
  		);
  		
  		$this->Model_keluar->add($array, 'arsip_keluar');
  		$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses</strong> , data berhasil disimpan.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
			redirect('arsip_keluar');
  	}

  }

  public function edit($id){

  	$arsip = $this->Model_keluar->getDataById($id)->result();
  	
  	$this->form_validation->set_rules('no_arsip_keluar', 'No Arsip', 'trim|required');
  	$this->form_validation->set_rules('jenis_arsip_keluar', 'Jenis Arsip', 'trim|required');
  	$this->form_validation->set_rules('jml_hlm_keluar', 'Jumlah Halaman', 'trim|required');
  	$this->form_validation->set_rules('dikerjakan_oleh', 'Dikerjakan oleh', 'trim|required');
  	$this->form_validation->set_rules('tgl_penyerahan', 'Tanggal Penyerahan', 'trim|required');
  	$this->form_validation->set_rules('keterangan_keluar', 'Keterangan', 'trim|required');

  	if($this->form_validation->run() != true){
  		$data['title'] 	= 'Edit Data';
  		$data['arsip']	= $arsip;
  		$this->load->view('templete/header', $data);
	    $this->load->view('templete/sidebar');
	    $this->load->view('arsip_keluar/edit', $data);
	    $this->load->view('templete/footer');
  	}else {
  		$array = array (
  			'no_arsip_keluar'	=> $this->input->post('no_arsip_keluar'),
  			'jenis_arsip_keluar'=> $this->input->post('jenis_arsip_keluar'),
  			'jml_hlm_keluar'	=> $this->input->post('jml_hlm_keluar'),
  			'dikerjakan_oleh'	=> $this->input->post('dikerjakan_oleh'),
  			'tgl_penyerahan'	=> $this->input->post('tgl_penyerahan'),
  			'keterangan_keluar'	=> $this->input->post('keterangan_keluar')
  		);
  		$this->Model_keluar->updateData($id,$array);
  		$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses</strong> , data berhasil diubah.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
			redirect('arsip_keluar');
  	}

  }

  public function hapus($id){
  	$where = array('id_keluar'=> $id);
  	$this->Model_keluar->hapusData($where, 'arsip_keluar');

	$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses</strong> , data berhasil dihapus.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
		redirect('arsip_keluar');
  }



}