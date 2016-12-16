<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tips extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_berita');
		$this->load->model('m_tips');
		$this->load->model('m_peta');
		$this->load->model('m_member');
		$this->load->model('m_kategori');
		$this->load->model('m_forum');
    }
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('tips');
	}
}
