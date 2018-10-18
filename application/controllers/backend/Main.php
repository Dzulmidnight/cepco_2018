<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->view('backend/template/head.php');
		$this->load->view('backend/template/navbar.php');
		$this->load->view('backend/template/footer.php');

		//echo $this->input->post('username');
		//echo $this->input->post('password');


	}


}
