<?php
class m_user extends CI_Model{	

	function getuserList(){
		return $this->db->get_where('user');
	}

	// Mendapatkan posisi untuk user

	function getposisiList(){
		return $this->db->get_where('posisiuser');
	}

		function JumlahUserPosisi($id)
			{   
			    $query = $this->db->get_where('user', array('user_posisi' => $id));
			    if($query->num_rows()>0)
			    {
			      return $query->num_rows();
			    }
			    else
			    {
			      return 0;
			    }
			}
	
	function idToPosisi($id){
		$query= $this->db->get_where('posisiuser', array('posisiuser_id' => $id));

		return $query->result_array();
	}

	// Mendapatkan list untuk artikel

	function getartikelList(){
		return $this->db->get_where('artikel');
	}

	
	// END Mendapatkan kategori untuk artikel


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

	function delPosisi($data) {
		$this->db->delete('posisiuser', $data);
	}	

  	// public function getSubKategori(){
  	// 	return $this->db->get_where('subkategori');
  	// }


	// INPUT ARTIKEL
  	function inputArtikel($data) {
		$this->db->insert('artikel', $data);
	
	}


	// EDIT ARTIKEL

	function getArtikelbyID(){
		return $this->db->get_where('artikel', array('id' => $_GET['id_artikel']));
	}

	function  edit_artikel($where,$data,$table){
		
		$this->db->where($where);
	
		$this->db->update($table,$data);
	
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
