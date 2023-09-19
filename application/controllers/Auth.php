<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
	}
	public function register()
	{
		$this->load->view('auth/register');
	}
	public function index()
	{
		$this->load->view('auth/login');
	} 
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
}

	