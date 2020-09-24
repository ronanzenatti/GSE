<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outros extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Entidade_model', 'em');
		$tipoEntidade = $this->em->GetById('id_entidade', $_SESSION['entidade_id']);

		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template' || $tipoEntidade["tipo"] != 'O') {
			header('Location: /principal');
		}
	}

	public function index()
	{
		$this->blade->view('outros/template');
	}
}
