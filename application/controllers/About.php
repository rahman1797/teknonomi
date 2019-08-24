<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	 function __construct(){
	    parent::__construct();    
  }

	public function index()
	{
		$data = array(
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('v_about', $data);
		$this->load->view('element/footer');
	}

}
