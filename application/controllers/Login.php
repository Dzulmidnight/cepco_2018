<?php
	class Login extends CI_Controller{


		public function index($login = 'login'){
			if(!file_exists(APPPATH.'views/frontend/'.$login.'.php')){
				show_404();
			}

			$this->load->view('frontend/template/head');
				$this->load->view('frontend/'.$login);
			$this->load->view('frontend/template/footer');
		}
	}