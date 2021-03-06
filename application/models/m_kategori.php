<?php
class m_kategori extends CI_Model{	


	function getKategori(){
		$this->db->select('*');
		$this->db->order_by('kategori_nama');
		$query = $this->db->get('kategori');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return false;
		}
	}

	function getSub(){
		$this->db->select('*');
		$query = $this->db->get('subkategori');
		return $query->row();
	}

	function getKategoriByID($id){
		$this->db->select('*');
		$this->db->where('kategori_id', $id);
		$query = $this->db->get('kategori');
		return $query->row();
	}

	function getSubByID($id){
		$this->db->select('*');
		$this->db->where('subkategori_id', $id);
		$query = $this->db->get('subkategori');
		return $query->row();
	}

	function getSubByKategori($id_kategori){
		$this->db->select('*');
		$this->db->where('id_kategori', $id_kategori);
		$query = $this->db->get('subkategori');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return false;
		}
	}

	function getNumberKategori($id) {	
	  $this->db->from('artikel');
	  $this->db->where('id_kategori', $id);
	  return $num_rows = $this->db->count_all_results();
	}

	//Mendapatkan jumlah sub kategori yang terdaftar dengan kategori tertentu
	function getNumberSubKategori($id) {   
		    $query = $this->db->get_where('subkategori', array('id_kategori' => $id));
		    return $query->num_rows();
		}



	public function get_kategori() {
		 return $this->db->get('kategori')->result();
	}

	public function get_sub($id) {
		// $this->db->join('kategori', 'subkategori.id_kategori = kategori.kategori_id');
        $query = $this->db->get_where('subkategori', array('id_kategori' => $id));

    	return $query->result_array();
	}

	public function subToKategori($id){
		$query = $this->db->get_where('subkategori', array('subkategori_id' => $id));

    	return $query->result_array();
	}

	
	// END Mendapatkan kategori untuk artikel



}