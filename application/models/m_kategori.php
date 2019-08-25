<?php
class m_kategori extends CI_Model{	


	function getSubByID($id){
		$this->db->select('*');
		$this->db->where('subkategori_id', $id);
		$query = $this->db->get('subkategori');
		return $query->row();
	}



}