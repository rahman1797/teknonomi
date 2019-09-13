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

  	//Menuju page daftar kategori
  	function kategori(){
  		$data = array(
  			'listkategori' => $this->m_kategori->getKategori()
  		);
  		$this->load->view('ADM/layout/header');
		$this->load->view('ADM/system_master/regkategori', $data);
		$this->load->view('ADM/layout/footer');
  	}

  	//menambah kategori baru
  	function addKategori(){
  		$nama = array('kategori_nama' => $this->input->post('namaKategori'));
  		$this->db->insert('kategori',$nama);
  	}

  	//Menuju page daftar subkategori
  	function subkategori(){
  		$data = array(
  			'listsubkategori' => $this->m_kategori->getSubByKategori($_GET['id'])
  		);
  		$this->load->view('ADM/layout/header');
		$this->load->view('ADM/system_master/regsubkategori', $data);
		$this->load->view('ADM/layout/footer');
  	}

  	//menambah Sub kategori baru
  	function addSubKategori(){
  		$nama = array(
  			'subkategori_nama' => $this->input->post('namaSubKategori'),
  			'id_kategori' => $this->input->post('idKategori')
  		);
  		$this->db->insert('subkategori',$nama);
  	}
	


}
