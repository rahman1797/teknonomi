<?php
class m_user extends CI_Model{	

	function getuserList(){
		return $this->db->get_where('user');
	}

	function getartikelList(){
		return $this->db->get_where('artikel');
	}

		function getartikelKategori($id_kategori){
			 $query = $this->db->get_where('kategori', array('kategori_id' => $id_kategori));

       		 return $query->result_array();
		}

		function getartikelsubKategori($id_subkategori){
			 $query = $this->db->get_where('subkategori', array('subkategori_id' => $id_subkategori));

       		 return $query->result_array();
		}

	function cekLogin($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function addUser($data) {
		// print_r($data);
		$this->db->insert('user', $data);
	}

	function delUser($data) {
		$this->db->delete('user', $data);
	}

	public function getKategori(){
  		return $this->db->get_where('kategori');
  	}

  	public function getSubKategori(){
  		return $this->db->get_where('subkategori');
  	}

  	function inputArtikel($data) {
		$this->db->insert('artikel', $data);
	
	}

	function getUser(){
		$this->db->select('*');
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return false;
		}
	}
}
