<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ADM extends CI_Controller {
	 function __construct(){
	    parent::__construct();    
	    $this->load->model('m_artikel');
	    $this->load->model('m_admin');
  }

	public function index()
	{
		$data = array(
			'listAdmin' => $this->m_admin->getAdminList()
		);
		$this->load->view('ADM/layout/header');
		$this->load->view('ADM/beranda', $data);
		$this->load->view('ADM/layout/footer');
	}

	// public function login()
	// {
	// 	$this->load->view('ADM/layout/header');
	// 	$this->load->view('ADM/login');
	// 	$this->load->view('ADM/layout/footer');
	// }

	public function listAdmin()
	{
		$data = array(
			'listAdmin' => $this->m_admin->getAdminList()->result()
		);
		$this->load->view('ADM/layout/header');
		$this->load->view('ADM/admin_list', $data);
		$this->load->view('ADM/layout/footer');
	}

	public function logout()
	{
		$logoutData = array('adminUsername','adminPass' );
		$this->session->unset_userdata($logoutData);
		$this->load->view('ADM/login');
	}

}
