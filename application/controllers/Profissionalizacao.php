<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profissionalizacao extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Profissionalizacao_model', 'prom');
		$this->load->model('Adolescente_model', 'am');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}
	}

	public function save()
	{	
		parse_str($this->input->post('form'), $form);

		$form['registrado'] = isset($form['registrado']) ? 1 : 0;

		if (empty($form['id_profissionalizacao'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->prom->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->prom->Update($form['id_profissionalizacao'], $form);
		}
	}
}

