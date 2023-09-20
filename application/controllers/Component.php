<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Component extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
	}

	public function index()
	{
		$this->load->view('component/sidebar');
	}

	public function navbar()
	{
		$this->load->view('component/navbar');
	} 
	
}

