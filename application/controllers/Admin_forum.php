<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_forum extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_forum');
		$this->load->model('m_forum_komentar');
		$this->load->model('m_kategori');
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_forum');
	}
	
	public function komentar()
	{
		$this->m_forum_komentar->set_id_forum($this->uri->segment(3));
		$query = $this->m_forum_komentar->tampil_forum_komentar_by_id_forum();
		if($query->num_rows()){
			$row = $query->row();
			$data['id_forum_komentar'] = $row->id_forum_komentar;
			$data['id_forum'] = $row->id_forum;
			$data['id_member'] = $row->id_member;
			$data['komentar'] = $row->komentar;
			$data['tgl_komentar'] = $row->tgl_komentar;
		}else{
			$data['id_forum_komentar'] = '';
			$data['id_forum'] = '';
			$data['id_member'] = '';
			$data['komentar'] = '';
			$data['tgl_komentar'] = '';
		}
		$this->load->view('admin_header');
		$this->load->view('admin_forum_komentar',$data);
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
	
	public function tambah_forum_komentar()
	{
		$id_forum = $this->input->post('id_forum');
		$id_kategori = $this->input->post('id_kategori');
		$this->m_forum_komentar->set_id_forum($this->input->post('id_forum'));
		$this->m_forum_komentar->set_id_member($this->session->userdata('id_member'));
		$this->m_forum_komentar->set_komentar($this->input->post('komentar'));
		$this->m_forum_komentar->set_tgl_komentar(date('Y-m-d'));
		$this->m_forum_komentar->tambah_forum_komentar();
		
		$this->session->set_flashdata('success', 'Komentar berhasil ditambah.');
		redirect(site_url().'forum/'.$id_kategori.'/'.$id_forum);
	}
	
	public function hapus_forum_komentar_front()
	{
		$this->m_forum_komentar->set_id_forum_komentar($this->uri->segment(3));
		$query = $this->m_forum_komentar->tampil_forum_komentar_by_id_forum_komentar();
		if($query->num_rows()){
			$row = $query->row();
			$id_forum = $row->id_forum;
			$id_kategori = $row->id_kategori;
		}
		$this->m_forum_komentar->hapus_forum_komentar();
		$this->session->set_flashdata('success', 'Komentar berhasil dihapus.');
		redirect(site_url().'forum/'.$id_kategori.'/'.$id_forum);
	}
	
	public function hapus_forum_komentar()
	{
		$this->m_forum_komentar->set_id_forum_komentar($this->uri->segment(3));
		$query = $this->m_forum_komentar->tampil_forum_komentar_by_id_forum_komentar();
		if($query->num_rows()){
			$row = $query->row();
			$id_forum = $row->id_forum;
		}
		$this->m_forum_komentar->hapus_forum_komentar();
		$this->session->set_flashdata('success', 'Komentar berhasil dihapus.');
		redirect(site_url().'admin_forum/komentar/'.$id_forum);
	}
}
