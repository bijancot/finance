<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		if($this->session->userdata('isLogged') == false){
			$data['title'] = "Login";
			$this->template->login('admin/login', $data);
		}else{
			if($this->session->userdata('isManagement') == "1"){
				redirect('management');
			}else if($this->session->userdata('isAdmin') == "1"){
				redirect('admin');
			}else if($this->session->userdata('isMaster') == "1"){
				redirect('master/driver');
			}else if($this->session->userdata('isSuper') == "1"){
				redirect('super/pengguna');
			}
		}
	}



	// public function index()
	// {
	// 	$this->form_validation->set_rules('username', 'Username', 'trim|required');
	// 	$this->form_validation->set_rules('user_password', 'User_password', 'trim|required');

	// 	if ($this->form_validation->run() == false) {
	// 		$data['title'] = 'login';
	// 		$this->template->login('admin/login', $data);
	// 	} else {
	// 		//validasi sukses
	// 		$this->_login();
	// 	}
	// }

	// private function _login()
	// {
	// 	$username 	   = $this->input->post('username');
	// 	$password 	   = $this->input->post('user_password');

	// 	$user = $this->db->get_where('master_user', ['username' => $username])->row_array();

	// 	//jika usernya ada
	// 	if ($user) {
	// 		//cek password
	// 		if (password_verify($password, $user['user_password'])) {
	// 			$data = [
	// 				'username' => $user['username'],
	// 				'user_role' => $user['user_role']
	// 			];
	// 			if ($user['user_role'] == 1) {
	// 				$this->load->view('_components/sideNavigation', $data);
	// 				$this->session->set_userdata($data);
	// 				redirect('admin/Admin');
	// 			} else {
	// 				echo 'Ini untuk management';
	// 			}
	// 		} else {
	// 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    //             Username atau Password yang anda masukan salah! </div>');
	// 			redirect('admin/Auth');
	// 		}
	// 	} else {
	// 		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    //         Username atau Password yang anda masukan salah! </div>');
	// 		redirect('admin/Auth');
	// 	}
	// }

}
