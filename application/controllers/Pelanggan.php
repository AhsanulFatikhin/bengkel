<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        // $this->load->library('session');
        // $this->load->database();
        // $this->load->model('mymodel');
    } 

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('pelanggan/home');
	}
	public function login()
	{
		$this->load->view('pelanggan/login');
	}
	public function data()
	{
		$this->load->view('pelanggan/data');
	}
	public function proses_login()
	{
		redirect('pelanggan/data');
	}
}
