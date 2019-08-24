<?php
class m_user extends CI_Model{	

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