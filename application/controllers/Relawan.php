<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relawan extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_relawan');
    }
	
	public function index()
	{
		$this->load->view('relawan');
	}
	
	public function daftar()
	{
		$this->m_relawan->set_nama($this->input->post('nama'));
		$this->m_relawan->set_alamat($this->input->post('alamat'));
		$this->m_relawan->set_email($this->input->post('email'));
		$this->m_relawan->set_no_telp($this->input->post('no_telp'));
		$this->m_relawan->set_jenis_kelamin($this->input->post('jenis_kelamin'));
		$this->m_relawan->set_tempat_lahir($this->input->post('tempat_lahir'));
		$this->m_relawan->set_tgl_lahir(date('Y-m-d',strtotime($this->input->post('tgl_lahir'))));
		$this->m_relawan->set_kota($this->input->post('kota'));
		$query = $this->m_relawan->tampil_relawan_by_email();
		if($query->num_rows()){
			$this->session->set_flashdata('error', 'Relawan dengan email tersebut telah terdaftar.');
			redirect(site_url().'relawan');	
		}else{
			$this->m_relawan->tambah_relawan();
			$this->session->set_flashdata('success', 'Relawan berhasil didaftarkan.');
			redirect(site_url().'relawan');
		}
	}
}
