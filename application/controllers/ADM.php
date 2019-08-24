<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ADM extends CI_Controller {
	 function __construct(){
	    parent::__construct();    
	    $this->load->model('m_artikel');
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

	public function logout()
	{
		$logoutData = array('username','pass', 'nama', 'logged_in' );
		$this->session->unset_userdata($logoutData);
		$this->load->view('ADM/login');
	}

}
