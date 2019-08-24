<?php
class m_user extends CI_Model{	

	function getuserList(){
		return $this->db->get_where('user');
	}

	function cekLogin($table,$where){		
			return $this->db->get_where($table,$where);
		}
	

}