<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComposicaoFamiliar extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ComposicaoFamiliar_model', 'cfm');
		$this->load->model('Adolescente_model', 'am');
		$this->load->model("Endereco_model", "edm");
		$this->load->model('Documento_model', 'dm');
	}

	public function index()
	{
		$this->blade->view('adolescentes/listar');
	}

	public function endereco($id)
	{

		$dados = array();
		$dados['end'] = $this->edm->GetById('idendereco', $id);
		$dados['ado'] = $this->am->GetById('idadolescente', $dados['end']['idadolescente']);
		$dados['doc'] = $this->dm->GetById('idadolescente', $dados['end']['idadolescente']);
		$dados['cf'] = $this->cfm->GetById('idendereco', $dados['end']['idendereco']);


		$this->blade->view('composicao_familiar/iuCF', $dados);
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
			$this->cfm->Update('idcf', $id, $form);
			echo $id;
		}
	}
}
