<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_peta extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_peta');
	}
}
