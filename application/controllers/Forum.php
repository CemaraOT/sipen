<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_forum');
		$this->load->model('m_forum_komentar');
		$this->load->model('m_berita');
		$this->load->model('m_tips');
		$this->load->model('m_peta');
		$this->load->model('m_member');
		$this->load->model('m_kategori');
    }
	
	public function index()
	{
		if($this->session->userdata('id_member')){
			$this->load->view('header');
			$this->load->view('forum');
		}else{
			$this->load->view('login');
		}
	}
}
