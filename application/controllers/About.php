<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	 function __construct(){
	    parent::__construct();
	    $this->load->model('m_user'); 
	    $this->load->model('m_kategori');   
  }

	public function index()
	{
		$data = array(
			'user' => $this->m_user->getUser(),
			'kategori' => $this->m_kategori->getKategori(),
			'subkategori' => $this->m_kategori->getSub(),
		);
		$this->load->view('element/head');
		$this->load->view('element/header', $data);
		$this->load->view('v_about', $data);
		$this->load->view('element/footer');
	}

}
