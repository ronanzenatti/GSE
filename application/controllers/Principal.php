<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model', 'um');
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			$obj['usuario'] = $this->um->GetById('id_usuario', $_SESSION['user_id']);
			$this->blade->view('sem_validacao/template', $obj);
		} else {
			$this->blade->view('template');
		}

	}

}
