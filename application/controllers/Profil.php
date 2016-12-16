<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_berita');
		$this->load->model('m_tips');
		$this->load->model('m_peta');
		$this->load->model('m_member');
		$this->load->model('m_forum');
    }
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('profil');
	}
	
	public function ubah_profil()
	{
		$id_member = $this->uri->segment(3);
		$this->m_member->set_id_member($id_member);
		$this->m_member->set_nama($this->input->post('nama'));
		$this->m_member->set_alamat($this->input->post('alamat'));
		$this->m_member->set_no_telp($this->input->post('no_telp'));
		$this->m_member->set_jenis_kelamin($this->input->post('jenis_kelamin'));
		$this->m_member->set_password($this->input->post('password'));
		$this->m_member->set_tgl_lahir(date('Y-m-d',strtotime($this->input->post('tgl_lahir'))));
		$this->session->unset_userdata('password');
		$this->session->set_userdata('password',$this->input->post('password'));
		$this->m_member->ubah_member();
		$this->session->set_flashdata('success', 'Profil berhasil diubah.');
		redirect(site_url().'profil');
	}
}
