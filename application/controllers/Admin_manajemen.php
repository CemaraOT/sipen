<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_manajemen extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_admin');
		$this->load->model('m_member');
		$this->load->model('m_relawan');
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_manajemen_admin');
	}
	
	public function admin()
	{
		if($this->uri->segment(3) == 'tambah'){
			$data['username'] = '';
			$data['password'] = '';
			$this->load->view('admin_header');
			$this->load->view('admin_manipulasi_admin',$data);
		}elseif($this->uri->segment(3) == 'ubah'){
			$this->m_admin->set_username($this->uri->segment(4));
			$query = $this->m_admin->tampil_admin_by_username();
			if($query->num_rows()){
				$row = $query->row();
				$data['username'] = $row->username;
				$data['password'] = $row->password;
			}
			$this->load->view('admin_header');
			$this->load->view('admin_manipulasi_admin',$data);
		}else{
			$this->load->view('admin_header');
			$this->load->view('admin_manajemen_admin');
		}
	}
	
	public function tambah_admin()
	{
		$this->m_admin->set_username($this->input->post('username'));
		$this->m_admin->set_password($this->input->post('password'));
		$query = $this->m_admin->tampil_admin_by_username();
		if($query->num_rows()){
			$this->session->set_flashdata('error', 'Username telah terdaftar, silahkan gunakan username yang lain.');
			redirect(site_url().'admin_manajemen/admin');
		}else{
			$this->m_admin->tambah_admin();
			$this->session->set_flashdata('success', 'Admin berhasil ditambah.');
			redirect(site_url().'admin_manajemen/admin');
		}
	}
	
	public function ubah_admin()
	{
		$this->m_admin->set_username($this->input->post('username'));
		$this->m_admin->set_password($this->input->post('password'));
		$query = $this->m_admin->tampil_admin_by_username();
		if($query->num_rows()){
			$this->session->unset_userdata('password');
			$this->session->set_userdata('password',$this->input->post('password'));
			$this->m_admin->ubah_password();
			$this->session->set_flashdata('success', 'Password berhasil diubah.');
			redirect(site_url().'admin_manajemen/admin');
		}
	}
	
	public function hapus_admin()
	{
		$this->m_admin->set_username($this->uri->segment(3));
		$this->m_admin->hapus_admin();
		$this->session->set_flashdata('success', 'Admin berhasil dihapus.');
		redirect(site_url().'admin_manajemen/admin');
	}
	
	public function member()
	{
		if($this->uri->segment(3) == 'ubah'){
			$this->m_member->set_id_member($this->uri->segment(4));
			$query = $this->m_member->tampil_member_by_id_member();
			if($query->num_rows()){
				$row = $query->row();
				$data['id_member'] = $row->id_member;
				$data['nama'] = $row->nama;
				$data['alamat'] = $row->alamat;
				$data['no_telp'] = $row->no_telp;
				$data['email'] = $row->email;
				$data['jenis_kelamin'] = $row->jenis_kelamin;
				$data['tgl_lahir'] = $row->tgl_lahir;
				$data['password'] = $row->password;
			}
			$this->load->view('admin_header');
			$this->load->view('admin_manipulasi_member',$data);
		}else{
			$this->load->view('admin_header');
			$this->load->view('admin_manajemen_member');
		}
	}
	
	public function tambah_member()
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
			redirect(site_url().'');	
		}else{
			$this->m_member->tambah_member();
			$this->session->set_flashdata('success', 'Member berhasil didaftarkan.');
			redirect(site_url().'');
		}
	}
	
	public function ubah_member()
	{
		$id_member = $this->uri->segment(3);
		$this->m_member->set_id_member($id_member);
		$this->m_member->set_nama($this->input->post('nama'));
		$this->m_member->set_alamat($this->input->post('alamat'));
		$this->m_member->set_no_telp($this->input->post('no_telp'));
		$this->m_member->set_jenis_kelamin($this->input->post('jenis_kelamin'));
		$this->m_member->set_tgl_lahir(date('Y-m-d',strtotime($this->input->post('tgl_lahir'))));
		$this->m_member->ubah_member();
		$this->session->set_flashdata('success', 'Member berhasil diubah.');
		redirect(site_url().'admin_manajemen/member/ubah/'.$id_member);
	}
	
	public function hapus_member()
	{
		$this->m_member->set_id_member($this->uri->segment(3));
		$this->m_member->hapus_member();
		$this->session->set_flashdata('success', 'Member berhasil dihapus.');
		redirect(site_url().'admin_manajemen/member');
	}
	
	public function relawan()
	{
		if($this->uri->segment(3) == 'ubah'){
			$this->m_relawan->set_id_relawan($this->uri->segment(4));
			$query = $this->m_relawan->tampil_relawan_by_id_relawan();
			if($query->num_rows()){
				$row = $query->row();
				$data['id_relawan'] = $row->id_relawan;
				$data['nama'] = $row->nama;
				$data['alamat'] = $row->alamat;
				$data['no_telp'] = $row->no_telp;
				$data['email'] = $row->email;
				$data['jenis_kelamin'] = $row->jenis_kelamin;
				$data['tempat_lahir'] = $row->tempat_lahir;
				$data['tgl_lahir'] = $row->tgl_lahir;
				$data['kota'] = $row->kota;
			}
			$this->load->view('admin_header');
			$this->load->view('admin_manipulasi_relawan',$data);
		}else{
			$this->load->view('admin_header');
			$this->load->view('admin_manajemen_relawan');
		}
	}
	
	public function tambah_relawan()
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
			redirect(site_url().'');	
		}else{
			$this->m_relawan->tambah_relawan();
			$this->session->set_flashdata('success', 'Relawan berhasil didaftarkan.');
			redirect(site_url().'');
		}
	}
	
	public function ubah_relawan()
	{
		$id_relawan = $this->uri->segment(3);
		$this->m_relawan->set_id_relawan($id_relawan);
		$this->m_relawan->set_nama($this->input->post('nama'));
		$this->m_relawan->set_alamat($this->input->post('alamat'));
		$this->m_relawan->set_no_telp($this->input->post('no_telp'));
		$this->m_relawan->set_jenis_kelamin($this->input->post('jenis_kelamin'));
		$this->m_relawan->set_tempat_lahir($this->input->post('tempat_lahir'));
		$this->m_relawan->set_tgl_lahir(date('Y-m-d',strtotime($this->input->post('tgl_lahir'))));
		$this->m_relawan->set_kota($this->input->post('kota'));
		$this->m_relawan->ubah_relawan();
		$this->session->set_flashdata('success', 'Relawan berhasil diubah.');
		redirect(site_url().'admin_manajemen/relawan/ubah/'.$id_relawan);
	}
	
	public function hapus_relawan()
	{
		$this->m_relawan->set_id_relawan($this->uri->segment(3));
		$this->m_relawan->hapus_relawan();
		$this->session->set_flashdata('success', 'Relawan berhasil dihapus.');
		redirect(site_url().'admin_manajemen/relawan');
	}
}