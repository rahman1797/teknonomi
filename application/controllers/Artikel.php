<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	 function __construct(){
	    parent::__construct();    
	    $this->load->model('m_artikel');
  }

	public function index()
	{
		$data = array(
			'artikel' => $this->m_artikel->getArtikel()
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('v_index', $data);
		$this->load->view('element/footer');
	}

	function detail($id) {
    $where = array('id' => $id);
    $data = array(
        'detail' => $this->m_artikel->getArtikelByID($id)
    );
        $this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('v_detail',$data);
		$this->load->view('element/footer');
  }
}
