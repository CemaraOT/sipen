<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_berita extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_berita');
		$this->load->model('m_kategori');
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_berita');
	}
	
	public function tambah()
	{
		$data['id_berita'] = '';
		$data['id_kategori'] = '';
		$data['judul'] = '';
		$data['deskripsi'] = '';
		$data['sumber'] = '';
		$data['gambar'] = '';
		$this->load->view('admin_header');
		$this->load->view('admin_manipulasi_berita',$data);
	}
	
	public function ubah()
	{
		$this->m_berita->set_id_berita($this->uri->segment(3));
		$query = $this->m_berita->tampil_berita_by_id_berita();
		if($query->num_rows()){
			$row = $query->row();
			$data['id_berita'] = $row->id_berita;
			$data['id_kategori'] = $row->id_kategori;
			$data['judul'] = $row->judul;
			$data['deskripsi'] = $row->deskripsi;
			$data['sumber'] = $row->sumber;
			$data['gambar'] = $row->gambar;
		}
		$this->load->view('admin_header');
		$this->load->view('admin_manipulasi_berita',$data);
	}
	
	public function tambah_berita()
	{
		$this->m_berita->set_id_kategori($this->input->post('id_kategori'));
		$this->m_berita->set_judul($this->input->post('judul'));
		$this->m_berita->set_deskripsi($this->input->post('deskripsi'));
		$this->m_berita->set_sumber($this->input->post('sumber'));
		$this->m_berita->set_tgl_post(date('Y-m-d'));
		$this->m_berita->tambah_berita();
		
		$query = $this->m_berita->tampil_berita_desc_limit_1();
		if($query->num_rows()){
			$row = $query->row();
			$id_berita = $row->id_berita;
		}
		
		$this->load->library('upload');
		$config['upload_path'] = './assets/img/berita/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';
		$config['overwrite'] = TRUE;
		$gambar = $config['file_name']= "gambar_".$id_berita.".jpg";
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar')){
			$this->m_berita->set_id_berita($id_berita);
			$this->m_berita->set_gambar($gambar);
			$this->m_berita->ubah_gambar_berita();
		}
		
		$this->session->set_flashdata('success', 'Berita berhasil ditambah.');
		redirect(site_url().'admin_berita');
	}
	
	public function ubah_berita()
	{
		$id_berita = $this->uri->segment(3);
		$this->m_berita->set_id_berita($id_berita);
		$this->m_berita->set_judul($this->input->post('judul'));
		$this->m_berita->set_deskripsi($this->input->post('deskripsi'));
		$this->m_berita->set_sumber($this->input->post('sumber'));
		$this->m_berita->ubah_berita();
		
		$this->load->library('upload');
		$config['upload_path'] = './assets/img/berita/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';
		$config['overwrite'] = TRUE;
		$gambar = $config['file_name']= "gambar_".$id_berita.".jpg";
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar')){
			$this->m_berita->set_id_berita($id_berita);
			$this->m_berita->set_gambar($gambar);
			$this->m_berita->ubah_gambar_berita();
		}
		
		$this->session->set_flashdata('success', 'Berita berhasil diubah.');
		redirect(site_url().'admin_berita/ubah/'.$id_berita);
	}
	
	public function hapus_berita()
	{
		$this->m_berita->set_id_berita($this->uri->segment(3));
		$query = $this->m_berita->tampil_berita_by_id_berita();
		if($query->num_rows()){
			$row = $query->row();
			$gambar = $row->gambar;
		}
		unlink('assets/img/berita/'.$gambar);
		$this->m_berita->hapus_berita();
		$this->session->set_flashdata('success', 'Berita berhasil dihapus.');
		redirect(site_url().'admin_berita');
	}
}
