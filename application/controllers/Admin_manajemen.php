<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_manajemen extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_manajemen_admin');
	}
	
	public function admin()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_manajemen_admin');
	}
	
	public function member()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_manajemen_member');
	}
	
	public function relawan()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_manajemen_relawan');
	}
}
