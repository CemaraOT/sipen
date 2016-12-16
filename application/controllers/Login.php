<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_member');
    }
	
	public function index()
	{
		$this->load->view('login');
	}
	
	public function daftar()
	{
		$this->load->view('daftar');
	}
	
	public function masuk()
    {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
        $this->m_member->set_email($email);
		$query = $this->m_member->tampil_member_by_email();
        if($query->num_rows()){
			$row = $query->row();
			if($row->email == $email && $row->password == $password){
				$this->session->set_userdata('email',$row->email);
				$this->session->set_userdata('id_member',$row->id_member);
				$this->session->set_userdata('nama',$row->nama);
				$this->session->set_userdata('password',$row->password);
				$this->session->set_flashdata('success', 'Selamat datang '.$row->nama.'!');
				redirect(site_url().'beranda');
			}elseif($row->email == $email){
				$this->session->set_flashdata('error', 'Password salah.');
				redirect(site_url().'login');
			}
		}else{
			$this->session->set_flashdata('error', 'Email tidak terdaftar.');
			redirect(site_url().'login');
		}
	}
	
	public function keluar()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_member');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('password');
        $this->session->sess_destroy();
		$this->session->set_flashdata('success', 'Terima kasih sudah bergabung dengan kami.');
        redirect(site_url().'beranda');
	}
	
	public function daftar_member()
	{
		$this->m_member->set_nama($this->input->post('nama'));
		$this->m_member->set_alamat($this->input->post('alamat'));
		$this->m_member->set_email($this->input->post('email'));
		$this->m_member->set_no_telp($this->input->post('no_telp'));
		$this->m_member->set_jenis_kelamin($this->input->post('jenis_kelamin'));
		$this->m_member->set_tgl_lahir(date('Y-m-d',strtotime($this->input->post('tgl_lahir'))));
		$this->m_member->set_password($this->input->post('password'));
		$query = $this->m_member->tampil_member_by_email();
		if($query->num_rows()){
			$this->session->set_flashdata('error', 'Member dengan email tersebut telah terdaftar.');
			redirect(site_url().'login/daftar');	
		}else{
			$this->m_member->tambah_member();
			$this->session->set_flashdata('success', 'Member berhasil didaftarkan.');
			redirect(site_url().'login');
		}
	}
}
