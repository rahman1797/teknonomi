<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ADM extends CI_Controller {
	 function __construct(){
	    parent::__construct();    
	    $this->load->helper(array('form', 'url'));
	    $this->load->model('m_artikel');
	    $this->load->model('m_kategori');
	    $this->load->model('m_user');
  }

	function Login(){
	    $this->load->view('ADM/login');
	}

	public function index()
	{
		$data = array(
			'listuser' => $this->m_user->getuserList()
		);
		$this->load->view('ADM/layout/header');
		$this->load->view('ADM/beranda', $data);
		$this->load->view('ADM/layout/footer');
	}

	public function sessLogin(){
        $username = $this->input->post('username_user');
        $pass = $this->input->post('pass');
        $where = array(
            'user_username' => $username,
            'user_password' => $pass,
            'user_role' => 'admin'
            );

        $cek2 = $this->m_user->cekLogin("user",$where);
        $cek = $this->m_user->cekLogin("user",$where)->num_rows();
         
        if($cek > 0){
           foreach ($cek2->result() as $sess ) {
            	$sessionData['logged_in'] = 'Done';
                $sessionData['username'] = $sess->user_username;
                $sessionData['pass'] = $sess->user_password;
                $sessionData['nama'] = $sess->user_nama;
                $sessionData['role'] = $sess->user_role;             
        
            }
                $this->session->set_userdata($sessionData);
                echo 'sukses';

            }
            else{
                echo " <script>
                         alert('username atau password salah!');
                         
                        </script>";
                        // print_r($_SESSION);
            }

        }

	public function listUser()
	{
		$data = array(
			'listUser' => $this->m_user->getuserList()->result()
		);
		$this->load->view('ADM/layout/header');
		$this->load->view('ADM/user_list', $data);
		$this->load->view('ADM/layout/footer');
	}


// MANAGE ARTIKEL
	public function listArtikel()
	{
		$data = array(
			'listArtikel' => $this->m_user->getartikelList()->result()
		);
		$this->load->view('ADM/layout/header');
		$this->load->view('ADM/artikel/artikel_list', $data);
		$this->load->view('ADM/layout/footer');
	}

	











	// Manage artikel

	public function addArtikelPage()
	{	
		$data = array(
			'kategori' => $this->m_kategori->get_kategori(),
			'sub' => '',  
			'sub_selected' => ''
		);

		$this->load->view('ADM/layout/header');
		$this->load->view('ADM/artikel/add_artikel', $data);
		$this->load->view('ADM/layout/footer');
	}

		function get_subkategori(){
	        $id = $this->input->post('id');
	        $data = $this->m_kategori->get_subkategori($id);
	        echo json_encode($data);
	    }

	public function addArtikel()
	{

				 $config['upload_path']= 'assets/images/artikel/';
			     $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
			     $config['max_size']      = 10000; 

			 
			     $this->load->library('upload', $config); 

			      $this->upload->initialize($config);

			     if ($this->upload->do_upload('userfile')) { //use this function

			        $data['error'] = false;
			        $upload_data = $this->upload->data();
			        $data['data'] = $upload_data;
			        $data['msg'] = 'Image Successfully Uploaded.';

			        $file_name = $data['data']['file_name'];

			        $id_subkategori = $this->input->post('sub');
			        $id_kategori = $this->m_kategori->subToKategori($id_subkategori);
			        print_r($id_kategori);
			        $database = array(
			            'judul' => $this->input->post('judul'),
			            'isi' => $this->input->post('isi'),
			            'penulis' => $_SESSION['nama'],
			            'foto' => $file_name,
			            'id_subkategori' => $id_subkategori,

			            'id_kategori' => $id_kategori['0']['id_kategori'],
			            'viewers' => 0 
			            );

			        $result = $this->db->insert('artikel', $database);

			        redirect(base_url('ADM/listArtikel'));

			     } else {
			     	echo "Terjadi kesalahan";
			        $error = array('error' => $this->upload->display_errors());
			        print_r($error);

			     }

		// END UPLOAD FOTO			

	}
// END MANAGE ARTIKEL


	// SISTEM MASTER

	public function regPosisi()
	{
		$data = array(
			'listPosisi' => $this->m_user->getposisiList()->result()
		);
		$this->load->view('ADM/layout/header');
		$this->load->view('ADM/system_master/regposisi', $data);
		$this->load->view('ADM/layout/footer');
	}

		function addPosisi()
		{
			$database = array (
				'posisiuser_nama' => $this->input->post('namaposisi')
			);

			$result = $this->db->insert('posisiuser', $database);
		}

		public function delPosisi($id)
		{
			if ($_SESSION['user_role'] != 1) {
				# code...
			}
			$idPosisi = array('posisiuser_id' => $id);
			$this->m_user->delPosisi($idPosisi,'posisiuser');
			redirect(base_url('ADM/regPosisi'));
		}



	// END SISTEM MASTER
	
	public function logout()
	{
		$logoutData = array('username','pass', 'nama', 'logged_in' );
		$this->session->unset_userdata($logoutData);
		$this->load->view('ADM/login');
	}

}
