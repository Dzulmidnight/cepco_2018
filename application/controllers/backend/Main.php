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
		$this->load->view('backend/template/aside.php');
		$this->load->view('backend/template/navbar.php');
		$this->load->view('backend/template/header.php');
			$this->load->view('backend/MOD_ADMINISTRACION/principal');
		$this->load->view('backend/template/footer');

		/*echo $this->input->post('username');
		echo $this->input->post('password');
		echo $this->input->post('tipo_usuario');*/

	}


}
