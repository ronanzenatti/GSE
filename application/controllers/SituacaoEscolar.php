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

}

