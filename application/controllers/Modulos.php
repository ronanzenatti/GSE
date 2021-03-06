<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modulos extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model', 'um');
		$this->load->model('Entidade_model', 'em');
	}

	public function index()
	{
		$termoCompromisso = $this->um->GetById('id_usuario', $_SESSION['user_id']);
		if ($termoCompromisso['data_termo']) {
			$tipoEntidade = $this->em->GetById('id_entidade', $_SESSION['entidade_id']);
			if ($tipoEntidade["tipo"] == "C") {
				$_SESSION['extends_module'] = 'template';
				redirect("Creas/");
			} elseif ($tipoEntidade["tipo"] == "M") {
				$_SESSION['extends_module'] = 'template';
				redirect("MinisterioPublico/");
			} elseif ($tipoEntidade["tipo"] == "S") {
				$_SESSION['extends_module'] = 'template';
				redirect("Saude/");
			} elseif ($tipoEntidade["tipo"] == "E") {
				$_SESSION['extends_module'] = 'template';
				redirect("Educacao/");
			} elseif ($tipoEntidade["tipo"] == "A") {
				$_SESSION['extends_module'] = 'template';
				redirect("Assistencial/");
			} elseif ($tipoEntidade["tipo"] == "O") {
				$_SESSION['extends_module'] = 'template';
				redirect("Outros/");
			} elseif ($tipoEntidade["tipo"] == "R") {
				$_SESSION['extends_module'] = 'template';
				redirect('principal/');
			}
		} else {
			$_SESSION['extends_module'] = 'sem_validacao/template';
			redirect('principal/');
		}


	}

}
