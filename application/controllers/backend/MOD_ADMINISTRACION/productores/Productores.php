<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productores extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	if(!file_exists(APPPATH.'views/logins/'.$login.'.php')){
		show_404();
	}
	$data['pais'] = $this->mPais->paises();
	$data['title'] = ucfirst($login); /// nos mostrara como titulo el nombre del archivo que estamos llamando

	public function view($seccion = 'Inicio'){
		if(!file_exists(APPPATH.'views/backend/MOD_ADMINISTRACION/'.$.'.php')){
			show_404();
		}
		$data['pais'] = $this->mPais->paises();
		$data['title'] = ucfirst($login); /// nos mostrara como titulo el nombre del archivo que estamos llamando

		$this->load->view('templates/header');
		$this->load->view('logins/'.$login, $data);
		$this->load->view('templates/footer');
	}
	

	public function listado_general(){
		$this->load->view('backend/template/head.php');
		$this->load->view('backend/template/aside.php');
		$this->load->view('backend/template/navbar.php');
		$this->load->view('backend/template/header.php');
			$this->load->view('backend/MOD_ADMINISTRACION/productores/listado_general');
		$this->load->view('backend/template/footer');

		/*echo $this->input->post('username');
		echo $this->input->post('password');
		echo $this->input->post('tipo_usuario');*/

	}


}
