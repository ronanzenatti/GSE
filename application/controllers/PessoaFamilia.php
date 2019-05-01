<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PessoaFamilia extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ComposicaoFamiliar_1_model', 'cfm');
		$this->load->model('Adolescente_model', 'am');
		$this->load->model("Endereco_model", "edm");
		$this->load->model('Documento_model', 'dm');
	}

	public function index()
	{
		$this->blade->view('adolescentes/listar');
	}



	public function save()
	{
		parse_str($this->input->post('form'), $form);
		$id = $form['idcf'];
		unset($form['idcf']);


		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			echo $this->cfm->Insert($form);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->cfm->Update($id, $form);
			echo $id;
		}
	}
}
