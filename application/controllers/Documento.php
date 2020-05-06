<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documento extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Documento_model', 'dm');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}
	}

	public function index()
	{
		$this->blade->view('/listar');
	}

	public function save()
	{
		parse_str($this->input->post('form'), $form);
		$form['adolescente_id'] = $this->input->post('id_adolescente');
		$form['id_documento'] = $this->input->post('id_documento');

		if (empty($form['rg_emissao'])) {
			$form['rg_emissao'] = null;
		} else {
			$form['rg_emissao'] = date('Y-m-d H:i:s', strtotime(str_replace("/", "-", $form['rg_emissao'])));
		}

		if (empty($form['id_documento'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			echo $this->dm->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->dm->Update($form['id_documento'], $form);
			echo $form['id_documento'];
		}


	}
}
