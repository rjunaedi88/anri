<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth extends CI_Controller{

	public function login()
	{
		$data['title'] = "Login";
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templete/header', $data);
		    $this->load->view('form_login');
		    $this->load->view('templete/footer');
		}else {
			$auth = $this->Model_auth->cek_login();

			if ($auth == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  		Username atau password yang anda masukan salah!
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				redirect('auth/login');
			} else {
				$this->session->set_userdata('username', $auth->username);
				redirect('arsip_masuk');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}