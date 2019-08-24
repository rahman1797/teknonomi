<?php
class m_admin extends CI_Model{	

	function getAdminList(){
		return $this->db->get_where('admin');
	}

	function cekLogin($table,$where){		
			return $this->db->get_where($table,$where);
		}
	

}