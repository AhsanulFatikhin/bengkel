<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class company_profile extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
		$this->load->view('company_profile');
	}
	public function compro()
	{
		$this->load->view('compro/header');
		$this->load->view('compro/compro');
		$this->load->view('compro/footer');
	}
}
