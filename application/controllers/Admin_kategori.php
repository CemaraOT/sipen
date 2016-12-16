<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_kategori extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_kategori');
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_kategori');
	}
	
	public function tambah()
	{
		$data['id_kategori'] = '';
		$data['nama_kategori'] = '';
		$this->load->view('admin_header');
		$this->load->view('admin_manipulasi_kategori',$data);
	}
	
	public function ubah()
	{
		$this->m_kategori->set_id_kategori($this->uri->segment(3));
		$query = $this->m_kategori->tampil_kategori_by_id_kategori();
		if($query->num_rows()){
			$row = $query->row();
			$data['id_kategori'] = $row->id_kategori;
			$data['nama_kategori'] = $row->nama_kategori;
		}
		$this->load->view('admin_header');
		$this->load->view('admin_manipulasi_kategori',$data);
	}
	
	public function tambah_kategori()
	{
		$this->m_kategori->set_nama_kategori($this->input->post('nama_kategori'));
		$this->m_kategori->tambah_kategori();
		$this->session->set_flashdata('success', 'Kategori berhasil ditambah.');
		redirect(site_url().'admin_kategori');
	}
	
	public function ubah_kategori()
	{
		$id = $this->uri->segment(3);
		$this->m_kategori->set_id_kategori($id);
		$this->m_kategori->set_nama_kategori($this->input->post('nama_kategori'));
		$this->m_kategori->ubah_kategori();
		$this->session->set_flashdata('success', 'Kategori berhasil diubah.');
		redirect(site_url().'admin_kategori/ubah/'.$id);
	}
	
	public function hapus_kategori()
	{
		$this->m_kategori->set_id_kategori($this->uri->segment(3));
		$this->m_kategori->hapus_kategori();
		$this->session->set_flashdata('success', 'Kategori berhasil dihapus.');
		redirect(site_url().'admin_kategori');
	}
}
