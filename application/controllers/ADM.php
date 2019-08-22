<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ADM extends CI_Controller {
	 function __construct(){
	    parent::__construct();    
	    $this->load->model('m_artikel');
  }

	public function index()
	{
		// $data = array(
		// 	'artikel' => $this->m_artikel->getArtikel()
		// );
		$this->load->view('ADM/layout/header');
		$this->load->view('ADM/beranda');
		$this->load->view('ADM/layout/footer');
	}

	public function logout()
	{
		$this->load->view('ADM/login');
	}

}
