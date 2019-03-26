<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SituacaoHabitacional extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('SituacaoHabitacional_model', 'shm');
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
		$dados['sh'] = $this->shm->GetById('idendereco', $dados['end']['idendereco']);

		$this->blade->view('situacao_habitacional/iuSH', $dados);
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('idsh');
		$obj['idendereco'] = $this->input->post('idendereco');
		$obj['agua'] = $this->input->post('agua');
		$obj['esgoto'] = $this->input->post('esgoto');
		$obj['energia'] = $this->input->post('energia');
		$obj['pavimento'] = $this->input->post('pavimento');
		$obj['coleta_lixo'] = $this->input->post('coleta_lixo');
		$obj['tipo'] = $this->input->post('tipo');
		$obj['situacao'] = $this->input->post('situacao');
		$obj['valor'] = str_replace(',', '.', str_replace('.', '', $this->input->post('valor')));
		$obj['qtde_comodos'] = $this->input->post('qtde_comodos');
		$obj['qtde_pessoas'] = $this->input->post('qtde_pessoas');
		$obj['espaco'] = str_replace(',', '.', str_replace('.', '', $this->input->post('espaco')));
		$obj['obs'] = $this->input->post('obs');

		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->shm->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->shm->Update('idsh', $id, $obj);
		}
		redirect('SituacaoHabitacional/');
	}
}
