<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_tips extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_tips');
		$this->load->model('m_kategori');
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_tips');
	}
	
	public function tambah()
	{
		$data['id_tips'] = '';
		$data['id_kategori'] = '';
		$data['judul'] = '';
		$data['deskripsi'] = '';
		$data['sumber'] = '';
		$data['gambar'] = '';
		$this->load->view('admin_header');
		$this->load->view('admin_manipulasi_tips',$data);
	}
	
	public function ubah()
	{
		$this->m_tips->set_id_tips($this->uri->segment(3));
		$query = $this->m_tips->tampil_tips_by_id_tips();
		if($query->num_rows()){
			$row = $query->row();
			$data['id_tips'] = $row->id_tips;
			$data['id_kategori'] = $row->id_kategori;
			$data['judul'] = $row->judul;
			$data['deskripsi'] = $row->deskripsi;
			$data['sumber'] = $row->sumber;
			$data['gambar'] = $row->gambar;
		}
		$this->load->view('admin_header');
		$this->load->view('admin_manipulasi_tips',$data);
	}
	
	public function tambah_tips()
	{
		$this->m_tips->set_id_kategori($this->input->post('id_kategori'));
		$this->m_tips->set_judul($this->input->post('judul'));
		$this->m_tips->set_deskripsi($this->input->post('deskripsi'));
		$this->m_tips->set_sumber($this->input->post('sumber'));
		$this->m_tips->set_tgl_post(date('Y-m-d'));
		$this->m_tips->tambah_tips();
		
		$query = $this->m_tips->tampil_tips_desc_limit_1();
		if($query->num_rows()){
			$row = $query->row();
			$id_tips = $row->id_tips;
		}
		
		$this->load->library('upload');
		$config['upload_path'] = './assets/img/tips/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';
		$config['overwrite'] = TRUE;
		$gambar = $config['file_name']= "gambar_".$id_tips.".jpg";
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar')){
			$this->m_tips->set_id_tips($id_tips);
			$this->m_tips->set_gambar($gambar);
			$this->m_tips->ubah_gambar_tips();
		}
		
		$this->session->set_flashdata('success', 'Tips berhasil ditambah.');
		redirect(site_url().'admin_tips');
	}
	
	public function ubah_tips()
	{
		$id_tips = $this->uri->segment(3);
		$this->m_tips->set_id_tips($id_tips);
		$this->m_tips->set_judul($this->input->post('judul'));
		$this->m_tips->set_deskripsi($this->input->post('deskripsi'));
		$this->m_tips->set_sumber($this->input->post('sumber'));
		$this->m_tips->ubah_tips();
		
		$this->load->library('upload');
		$config['upload_path'] = './assets/img/tips/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';
		$config['overwrite'] = TRUE;
		$gambar = $config['file_name']= "gambar_".$id_tips.".jpg";
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar')){
			$this->m_tips->set_id_tips($id_tips);
			$this->m_tips->set_gambar($gambar);
			$this->m_tips->ubah_gambar_tips();
		}
		
		$this->session->set_flashdata('success', 'Tips berhasil diubah.');
		redirect(site_url().'admin_tips/ubah/'.$id_tips);
	}
	
	public function hapus_tips()
	{
		$this->m_tips->set_id_tips($this->uri->segment(3));
		$query = $this->m_tips->tampil_tips_by_id_tips();
		if($query->num_rows()){
			$row = $query->row();
			$gambar = $row->gambar;
		}
		unlink('assets/img/tips/'.$gambar);
		$this->m_tips->hapus_tips();
		$this->session->set_flashdata('success', 'Tips berhasil dihapus.');
		redirect(site_url().'admin_tips');
	}
}
