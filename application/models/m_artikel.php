<?php
class m_artikel extends CI_Model{	

	function getArtikel(){
		$this->db->select('*');
		$query = $this->db->get('artikel');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return false;
		}
	}

	function getArtikelByID($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$query = $this->db->get('artikel');
		return $query->row();
	}

	function getArtikelBySub($sub){
		$this->db->select('*');
		$this->db->where('subkategori', $sub);
		$query = $this->db->get('artikel');
		return $query->row();
	}

	public function getWhere($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function getMostPopularByKategori($kategori){
		$this->db->select('*');
		$this->db->where('kategori', $kategori);
		$this->db->select_max('viewers');
		$query = $this->db->get('artikel');
		return $query->row();
	}

	function getPopularByKategori($kategori, $viewersmax){
		$this->db->select('*');
		$this->db->where('kategori', $kategori);
		$this->db->where('viewers <', $viewersmax);
		$this->db->order_by('viewers', 'DESC');
		$query = $this->db->get('artikel');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return false;
		}
	}

}