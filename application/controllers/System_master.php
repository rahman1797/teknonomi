<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class System_master extends CI_Controller {
	 function __construct(){
	    parent::__construct();    
	    $this->load->helper(array('form', 'url'));
	    $this->load->model('m_artikel');
	    $this->load->model('m_kategori');
	    $this->load->model('m_user');
  }


  	function kategori(){
  		$data = array(
  			'listkategori' => $this->m_kategori->getKategori()
  		);
  		$this->load->view('ADM/layout/header');
		$this->load->view('ADM/system_master/regkategori', $data);
		$this->load->view('ADM/layout/footer');
  	}
	


}
