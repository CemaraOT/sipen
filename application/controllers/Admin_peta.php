<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_peta extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_peta');
		$this->load->model('m_kategori');
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_peta');
	}
	
	public function tambah()
	{
		$data['id_peta'] = '';
		$data['id_kategori'] = '';
		$data['judul'] = '';
		$data['deskripsi'] = '';
		$data['sumber'] = '';
		$data['gambar'] = '';
		$this->load->view('admin_header');
		$this->load->view('admin_manipulasi_peta',$data);
	}
	
	public function ubah()
	{
		$this->m_peta->set_id_peta($this->uri->segment(3));
		$query = $this->m_peta->tampil_peta_by_id_peta();
		if($query->num_rows()){
			$row = $query->row();
			$data['id_peta'] = $row->id_peta;
			$data['id_kategori'] = $row->id_kategori;
			$data['judul'] = $row->judul;
			$data['deskripsi'] = $row->deskripsi;
			$data['sumber'] = $row->sumber;
			$data['gambar'] = $row->gambar;
		}
		$this->load->view('admin_header');
		$this->load->view('admin_manipulasi_peta',$data);
	}
	
	public function tambah_peta()
	{
		$this->m_peta->set_id_kategori($this->input->post('id_kategori'));
		$this->m_peta->set_judul($this->input->post('judul'));
		$this->m_peta->set_deskripsi($this->input->post('deskripsi'));
		$this->m_peta->set_sumber($this->input->post('sumber'));
		$this->m_peta->tambah_peta();
		
		$query = $this->m_peta->tampil_peta_desc_limit_1();
		if($query->num_rows()){
			$row = $query->row();
			$id_peta = $row->id_peta;
		}
		
		$this->load->library('upload');
		$config['upload_path'] = './assets/img/peta/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';
		$config['overwrite'] = TRUE;
		$gambar = $config['file_name']= "gambar_".$id_peta.".jpg";
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar')){
			$this->m_peta->set_id_peta($id_peta);
			$this->m_peta->set_gambar($gambar);
			$this->m_peta->ubah_gambar_peta();
		}
		
		$this->session->set_flashdata('success', 'Peta berhasil ditambah.');
		redirect(site_url().'admin_peta');
	}
	
	public function ubah_peta()
	{
		$id_peta = $this->uri->segment(3);
		$this->m_peta->set_id_peta($id_peta);
		$this->m_peta->set_judul($this->input->post('judul'));
		$this->m_peta->set_deskripsi($this->input->post('deskripsi'));
		$this->m_peta->set_sumber($this->input->post('sumber'));
		$this->m_peta->ubah_peta();
		
		$this->load->library('upload');
		$config['upload_path'] = './assets/img/peta/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';
		$config['overwrite'] = TRUE;
		$gambar = $config['file_name']= "gambar_".$id_peta.".jpg";
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar')){
			$this->m_peta->set_id_peta($id_peta);
			$this->m_peta->set_gambar($gambar);
			$this->m_peta->ubah_gambar_peta();
		}
		
		$this->session->set_flashdata('success', 'Peta berhasil diubah.');
		redirect(site_url().'admin_peta/ubah/'.$id_peta);
	}
	
	public function hapus_peta()
	{
		$this->m_peta->set_id_peta($this->uri->segment(3));
		$query = $this->m_peta->tampil_peta_by_id_peta();
		if($query->num_rows()){
			$row = $query->row();
			$gambar = $row->gambar;
		}
		unlink('assets/img/peta/'.$gambar);
		$this->m_peta->hapus_peta();
		$this->session->set_flashdata('success', 'Peta berhasil dihapus.');
		redirect(site_url().'admin_peta');
	}
}
