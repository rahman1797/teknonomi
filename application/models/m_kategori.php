<?php
class m_kategori extends CI_Model{	


	function getKategori(){
		$this->db->select('*');
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



}