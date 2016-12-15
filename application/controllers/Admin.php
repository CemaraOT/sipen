<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_admin');
    }
	
	public function index()
	{
		$this->load->view('admin_login');
	}
	
	public function masuk()
    {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
        $this->m_admin->set_username($username);
		$query = $this->m_admin->tampil_admin_by_username();
        if($query->num_rows()){
			$row = $query->row();
			if($row->username == $username && $row->password == $password){
				$this->session->set_userdata('username',$row->username);
				$this->session->set_userdata('password',$row->password);
				$this->session->set_flashdata('success', 'Selamat datang '.$row->username.'!');
				redirect(site_url().'admin_beranda');
			}elseif($row->username == $username){
				$this->session->set_flashdata('error', 'Password salah.');
				redirect(site_url().'admin');
			}
		}else{
			$this->session->set_flashdata('error', 'Username tidak terdaftar.');
			redirect(site_url().'admin');
		}
	}
	
	public function keluar()
    {
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();
        redirect(site_url().'admin');
	}
}
