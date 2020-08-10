<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SituacaoEscolar extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Adolescente_model', 'am');
		$this->load->model('Documento_model', 'dm');
		$this->load->model('Pia_model', 'pm');
		$this->load->model('SituacaoEscolar_model', 'sem');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}
	}

	public function index()
	{
		$this->blade->view('situacoes_escolares/listar');
	}

	public function inserir()
	{
		$this->blade->view('situacoes_escolares/iuSE');
	}

	public function save()
	{
		parse_str($this->input->post('form'), $form);

		$form['estudando'] = isset($form['ativoE']) ? 1 : 0;
		$form['retornar'] = isset($form['ativoR']) ? 1 : 0;

		unset($form['ativoE']);
		unset($form['ativoR']);

		$form['atestado_matricula'] = (empty($form['atestado_matricula'])) ? null : date("Y-m-d", strtotime(str_replace("/", "-", $form['atestado_matricula'])));

		if (empty($form['id_situacao_escolar'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->sem->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->sem->Update($form['id_situacao_escolar'], $form);
		}
		// redirect('');
	}

	// if (ano_abandono) {
	// 	$("#ativoE").removeAttr("checked");
	// }
	// if (obj.ativo == 0) {
	// 	$("#ativoE").removeAttr("checked");
	// }

	public function elaboracao($id)
	{
		$dados = array();
		$dados['id'] = $id;
		$dados['obj'] = $this->pm->GetById('id_pia', $id);
		$dados['obj']['data_inicio'] = (!empty($dados['obj']['data_inicio'])) ? date("d/m/Y", strtotime($dados['obj']['data_inicio'])) : null;
		$dados['obj']['data_recepcao'] = (!empty($dados['obj']['data_recepcao'])) ? date("d/m/Y", strtotime($dados['obj']['data_recepcao'])) : null;
		$dados['processos'] = $this->pm->getTotalProcessos($dados['obj']['adolescente_id'], $id);
		$qtdeProcessos = 0;
		foreach ($dados['processos'] as $p) {
			$qtdeProcessos = $qtdeProcessos + $p->qtdeProcessos;
		}
		$dados['obj']['qtdeProcessos'] = $qtdeProcessos;

		$dados['ado'] = $this->am->GetById('id_adolescente', $dados['obj']['adolescente_id']);
		$dados['ado']['dt_nasc'] = (!empty($dados['ado']['dt_nasc'])) ? date("d/m/Y", strtotime($dados['ado']['dt_nasc'])) : null;

		$dados['doc'] = $this->dm->GetById('adolescente_id', $dados['obj']['adolescente_id']);
		$dados['doc']['rg_emissao'] = (!empty($dados['objD']['rg_emissao'])) ? date("d/m/Y", strtotime($dados['objD']['rg_emissao'])) : null;
		
		$dados['se'] = $this->sem->GetById('adolescente_id', $dados['obj']['adolescente_id']);
		// $dados['se']['id_situacao_escolar'] = (!empty($dados['se']['id_situacao_escolar'])) ? date("d/m/Y", strtotime($dados['se']['id_situacao_escolar'])) : null;
		// $dados['se']['atestado_matricula'] = (!empty($dados['se']['atestado_matricula'])) ? date("d/m/Y", strtotime($dados['se']['atestado_matricula'])) : null;
		//se colocar atestado sem id_situacao, dá erro quando id_situacao é nulo
		
		$this->blade->view('situacoes_escolares/bodyPia', $dados);
	}

	
}

