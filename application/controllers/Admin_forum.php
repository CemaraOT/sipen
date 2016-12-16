<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_forum extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_forum');
		$this->load->model('m_kategori');
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_forum');
	}
	
	public function tambah()
	{
		$data['id_forum'] = '';
		$data['id_kategori'] = '';
		$data['judul'] = '';
		$data['deskripsi'] = '';
		$this->load->view('admin_header');
		$this->load->view('admin_manipulasi_forum',$data);
	}
	
	public function ubah()
	{
		$this->m_forum->set_id_forum($this->uri->segment(3));
		$query = $this->m_forum->tampil_forum_by_id_forum();
		if($query->num_rows()){
			$row = $query->row();
			$data['id_forum'] = $row->id_forum;
			$data['id_kategori'] = $row->id_kategori;
			$data['judul'] = $row->judul;
			$data['deskripsi'] = $row->deskripsi;
		}
		$this->load->view('admin_header');
		$this->load->view('admin_manipulasi_forum',$data);
	}
	
	public function tambah_forum()
	{
		$this->m_forum->set_id_kategori($this->input->post('id_kategori'));
		$this->m_forum->set_judul($this->input->post('judul'));
		$this->m_forum->set_deskripsi($this->input->post('deskripsi'));
		$this->m_forum->set_tgl_post(date('Y-m-d'));
		$this->m_forum->tambah_forum();
		
		$this->session->set_flashdata('success', 'Forum berhasil ditambah.');
		redirect(site_url().'admin_forum');
	}
	
	public function ubah_forum()
	{
		$id_forum = $this->uri->segment(3);
		$this->m_forum->set_id_forum($id_forum);
		$this->m_forum->set_judul($this->input->post('judul'));
		$this->m_forum->set_deskripsi($this->input->post('deskripsi'));
		$this->m_forum->ubah_forum();
		
		$this->session->set_flashdata('success', 'Forum berhasil diubah.');
		redirect(site_url().'admin_forum/ubah/'.$id_forum);
	}
	
	public function hapus_forum()
	{
		$this->m_forum->set_id_forum($this->uri->segment(3));
		$this->m_forum->hapus_forum();
		$this->session->set_flashdata('success', 'Forum berhasil dihapus.');
		redirect(site_url().'admin_forum');
	}
}
