<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LazerCulturaEsporte extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('LazerCulturaEsporte_model', 'lcem');
		$this->load->model('Adolescente_model');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}
	}

	public function save()
	{	
		parse_str($this->input->post('form'), $form);

		if (empty($form['ld_lce'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->lcem->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->lcem->Update($form['ld_lce'], $form);
		}
	}
}
