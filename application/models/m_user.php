<?php
class m_user extends CI_Model{	

	function getuserList(){
		return $this->db->get_where('user');
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
	

}
