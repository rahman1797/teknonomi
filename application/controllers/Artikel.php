<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	 function __construct(){
	    parent::__construct();    
	    $this->load->model('m_artikel');
	    $this->load->model('m_kategori');
  }

	public function index()
	{
		$data = array(
			'popular' => $this->m_artikel->getArtikelDesc(),
			'recent' => $this->m_artikel->getRecentArtikel(),
			'kategori' => $this->m_kategori->getKategori(),
			'subkategori' => $this->m_kategori->getSub(),
			'mostpopular' => $this->m_artikel->getMostPopularVer2(),
		);
		$this->load->view('element/head');
		$this->load->view('element/header', $data);
		$this->load->view('v_index', $data);
		$this->load->view('element/footer', $data);
	}

	public function detail($id) {
	    $where = array('id' => $id);
	    $data = array(
	        'detail' => $this->m_artikel->getArtikelByID($id),
	        'artikel' => $this->m_artikel->getArtikelDesc(),
	        'kategori' => $this->m_kategori->getKategori(),
			'subkategori' => $this->m_kategori->getSub(),
	    );
	        $this->load->view('element/head');
			$this->load->view('element/header',$data);
			$this->load->view('v_detail',$data);
			$this->load->view('element/footer',$data);
  }

  public function kategori($id) {
	    $data = array(
	        'id_kategori' =>$id,
	        'artikel' => $this->m_artikel->getArtikelByKategori($id),
	        'popular' => $this->m_artikel->getArtikelDesc(),
	        'kategori' => $this->m_kategori->getKategori(),
			'subkategori' => $this->m_kategori->getSub(),
	    );
	    $this->load->view('element/head');
		$this->load->view('element/header',$data);
		$this->load->view('v_artikel-kategori',$data);
		$this->load->view('element/footer',$data);
  }

    public function subkategori($id) {
	    $data = array(
	        'id_subkategori' =>$id,
	        'artikel' => $this->m_artikel->getArtikelBySub($id),
	        'kategori' => $this->m_kategori->getKategori(),
	        'popular' => $this->m_artikel->getArtikelDesc(),
			'subkategori' => $this->m_kategori->getSub(),
	    );
	    $this->load->view('element/head');
		$this->load->view('element/header',$data);
		$this->load->view('v_artikel-subkategori',$data);
		$this->load->view('element/footer',$data);
  }

}
