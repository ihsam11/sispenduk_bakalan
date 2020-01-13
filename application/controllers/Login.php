<?php
/*
	Author: Muhammad Ikhsan
	Created on: 06 January 2020
*/	
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();		
		$this->load->model('LoginModel', 'login');
	}

	public function index()
	{
		$this->load->view('view_login');
	}

	public function do_login() {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$getUser = $this->login->get_userdata($username);

		if ( $getUser->num_rows ) {
			$session = array(
				'username' => $getUser->username,
				'is_loggedin' => TRUE,
				'last_loggedin' => date('Y-m-d h:i:s')
			);
			$this->session->set_userdata($session);
		}
		else {

		}



	}

	public function do_logout() {
		$this->session->sess_destroy();
		redirect('login');
	}
}
