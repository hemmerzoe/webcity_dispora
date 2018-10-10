<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://www.roytuts.com
 */
class Portal extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_administrator');
	}

	function index() {
		$this->load->view('v_portal');
	}

	function ceklogin(){
		$data = array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			);

		$login = $this->m_administrator->check_admin($data);   

		//data diambil dari model lalu Menyimpan userdata dalam session  
		if (count($login) > 0) {
			print_r($login);

			$session = array(
				'nama_admin'	=> $login[0]['id_user'],
				'username'     	=> $login[0]['username'],
				'password'     	=> $login[0]['password'],
				'level'     	=> $login[0]['level']				
				);

			$this->session->set_userdata($session);

        	//buat redirect halaman berdasarkan tipe pengguna         
			if($session['level'] == "admin"){
				header('location: ' . base_url('Beranda'));	
			}
		}   
		else {
			header('location: ' . base_url($this->session->set_flashdata('failed', '.')));
		}
	}  
	//

	// fungsi yg dijalankan pada saat logout    
	public function logout() 
	{
		$this->session->sess_destroy();
		header('location: ' . base_url());
	}  

}
