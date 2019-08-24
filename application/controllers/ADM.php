<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ADM extends CI_Controller {
	 function __construct(){
	    parent::__construct();    
	    $this->load->model('m_artikel');
	    $this->load->model('m_admin');
  }

	function Login(){
	    $this->load->view('ADM/login');
	}

	public function index()
	{
		$data = array(
			'listAdmin' => $this->m_admin->getAdminList()
		);
		$this->load->view('ADM/layout/header');
		$this->load->view('ADM/beranda', $data);
		$this->load->view('ADM/layout/footer');
	}

	public function sessLogin(){
        $username = $this->input->post('username_admin');
        $pass = $this->input->post('pass');
        $where = array(
            'admin_username' => $username,
            'admin_password' => $pass
            );

        $cek2 = $this->m_admin->cekLogin("admin",$where);
        $cek = $this->m_admin->cekLogin("admin",$where)->num_rows();
         
        if($cek > 0){
           foreach ($cek2->result() as $sess ) {
            	$sessionData['logged_in'] = 'Done';
                $sessionData['username'] = $sess->admin_username;
                $sessionData['pass'] = $sess->admin_password;
                $sessionData['nama'] = $sess->admin_nama;             
        
            }
                $this->session->set_userdata($sessionData);
                echo "sukses";
            }
            else{
                echo " <script>
                         alert('username atau password salah!');
                         
                        </script>";
                        print_r($_SESSION);
            }

        }

	public function listAdmin()
	{
		$data = array(
			'listAdmin' => $this->m_admin->getAdminList()->result()
		);
		$this->load->view('ADM/layout/header');
		$this->load->view('ADM/admin_list', $data);
		$this->load->view('ADM/layout/footer');
	}

	public function logout()
	{
		$logoutData = array('username','pass', 'nama' );
		$this->session->unset_userdata($logoutData);
		$this->load->view('ADM/login');
	}

}
