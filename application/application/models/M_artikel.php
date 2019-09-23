<?php

class m_artikel extends CI_Model{	

	function getArtikelDesc(){

		$this->db->select('*');

		$this->db->order_by('viewers', 'DESC');

		$query = $this->db->get('artikel');

		if($query->num_rows()>0)

		{

			return $query->result();

		} else{

			return false;

		}

	}



	function getRecentArtikel(){

		$this->db->select('*');

		$this->db->order_by('tanggal_dibuat', 'DESC');

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



	function getArtikelBySlug($slug){

		$this->db->select('*');

		$this->db->where('slug', $slug);

		$query = $this->db->get('artikel');

		return $query->row();

	}	



	function getMostPopular(){

		$this->db->select('*');

		$this->db->select_max('viewers');

		$query = $this->db->get('artikel');

		return $query->row();

	}



	function getMostPopularVer2(){

		$this->db->select('*');

		$this->db->order_by('viewers', 'DESC');

		$query = $this->db->get('artikel');

		if($query->num_rows()>0)

		{

			return $query->result();

		} else{

			return false;

		}

	}





	function getArtikelBySub($sub){

		$this->db->select('*');

		$this->db->where('id_subkategori', $sub);

		$query = $this->db->get('artikel');

		if($query->num_rows()>0)

		{

			return $query->result();

		} else{

			return false;

		}

	}



	function getWhere($where,$table){		

		return $this->db->get_where($table,$where);

	}



	function getMostPopularByKategori($kategori){

		$this->db->select('*');

		$this->db->where('id_kategori', $kategori);

		$this->db->order_by('viewers', 'DESC');

		$this->db->select_max('viewers');

		$query = $this->db->get('artikel');

		return $query->row();

	}



	function getPopularByKategori($kategori, $viewersmax){

		$this->db->select('*');

		$this->db->where('id_kategori', $kategori);

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





	function getPopularByKategoriVer2($id_kategori){

		$this->db->select('*');

		$this->db->where('id_kategori', $id_kategori);

		$this->db->order_by('tanggal_dibuat', 'DESC');

		$query = $this->db->get('artikel');

		if($query->num_rows()>0)

		{

			return $query->result();

		} else{

			return false;

		}

	}



	function getPopularBySubVer2($id_subkategori){

		$this->db->select('*');

		$this->db->where('id_subkategori', $id_subkategori);

		$this->db->order_by('tanggal_dibuat', 'DESC');

		$query = $this->db->get('artikel');

		if($query->num_rows()>0)

		{

			return $query->result();

		} else{

			return false;

		}

	}



	function getMostPopularBySub($sub){

		$this->db->select('*');

		$this->db->where('id_subkategori', $sub);

		$this->db->select_max('viewers');

		$query = $this->db->get('artikel');

		return $query->row();

	}



	function getPopularBySub($sub, $viewersmax){

		$this->db->select('*');

		$this->db->where('id_subkategori', $sub);

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



	function getArtikelByKategori($id_kategori){

		$this->db->select('*');

		$this->db->where('id_kategori', $id_kategori);

		$this->db->order_by('viewers', 'DESC');

		$query = $this->db->get('artikel');

		if($query->num_rows()>0)

		{

			return $query->result();

		} else{

			return false;

		}



	}



	function hapusData($where,$table){

		$this->db->where($where);

		$this->db->delete($table);

	}



	function updateData($where,$data,$table)

	{

		$this->db->where($where);

		$this->db->update($table,$data);

	}





}