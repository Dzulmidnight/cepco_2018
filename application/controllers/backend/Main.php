<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	private $sub_vista = 0;
	private $vista = 'Principal';
	private $carpeta = '';

	function __construct()
	{
		parent::__construct();
	}


	public function view($carpeta = false, $sub_carpeta = false, $vista = false){

		//$sub_vista = 0;
		if($carpeta == false){
			switch ($this->input->post('carpeta')) {
				case 'ambiental':
					$this->carpeta = 'MOD_AMBIENTAL';
					break;
				case 'asuntos_internos':
					$this->carpeta = 'MOD_ASUNTOS_INTERNOS';
					break;
				case 'comercializacion':
					$this->carpeta = 'MOD_COMERCIALIZACION';
					break;
				case 'gestion_interna':
					$this->carpeta = 'MOD_GESTION_INTERNA';
					break;
				case 'proyectos':
					$this->carpeta = 'MOD_PROYECTOS';
					break;
				
				default:
					show_404();
					break;
			}
		}else{
			switch ($carpeta) {
				case 'ambiental':
					$this->carpeta = 'MOD_AMBIENTAL';
					break;
				case 'asuntos_internos':
					$this->carpeta = 'MOD_ASUNTOS_INTERNOS';
					break;
				case 'comercializacion':
					$this->carpeta = 'MOD_COMERCIALIZACION';
					break;
				case 'gestion_interna':
					$this->carpeta = 'MOD_GESTION_INTERNA';
					break;
				case 'proyectos':
					$this->carpeta = 'MOD_PROYECTOS';
					break;
				
				default:
					show_404();
					break;
			}

		}
		$carpeta = $this->carpeta;
//ECHO 'LA CARPETA :'.$carpeta;

		if(!file_exists(APPPATH.'views/backend/'.$carpeta.'/'.$this->vista.'.php')){
			show_404();
		}

		$data['title'] = ucfirst($this->vista);

		$this->load->view('backend/template/head.php');
		$this->load->view('backend/template/aside.php');
		$this->load->view('backend/template/navbar.php');
		$this->load->view('backend/template/header.php');

		$data['carpeta'] = $carpeta;


		if($this->sub_vista == 0){ // CARGAMOS VISTA DEFAULT
			$this->load->view('backend/'.$carpeta.'/'.$this->vista,$data);
		}else{
			$this->load->view('backend/'.$carpeta.'/'.$vista,$data);
			//$this->load->view('backend/'.$carpeta.'/'.$vista,$data);

		}
			
		$this->load->view('backend/template/footer');

		/*echo $this->input->post('username');
		echo $this->input->post('password');
		echo $this->input->post('tipo_usuario');*/


	}

	public function sub_view(){
		//$variable = $this->input->post('opcion_seleccionada');
		//echo $variable;
		echo $this->input->post('sub_carpeta');
		echo '<br>';
		echo $this->input->post('archivo');
		echo '<br>';
		echo $this->input->post('carpeta');
		
		//return $this->view('asuntos_internos');
	}


	/*public function view($carpeta = 'MOD_ASUNTOS_INTERNOS', $vista = 'Principal'){
		if(!file_exists(APPPATH.'views/backend/'.$carpeta.'/'.$vista.'.php')){
			show_404();
		}

		$data['title'] = ucfirst($vista);

		$this->load->view('backend/template/head.php');
		$this->load->view('backend/template/aside.php');
		$this->load->view('backend/template/navbar.php');
		$this->load->view('backend/template/header.php');

			$data['funcionAnonima'] = $this->vista_interna;
			$this->sub_view();
			$data['otra'] = $this->variable;

			$this->load->view('backend/'.$carpeta.'/'.$vista,$data);
			//$this->load->view('backend/MOD_ASUNTOS_INTERNOS/principal');


		$this->load->view('backend/template/footer');

		/*echo $this->input->post('username');
		echo $this->input->post('password');
		echo $this->input->post('tipo_usuario');*/
/*

	}*/





}