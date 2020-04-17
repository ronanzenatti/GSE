<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GrupoFamiliar extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('GrupoFamiliar_model', 'gfm');
		$this->load->model('Adolescente_model', 'am');
		$this->load->model('Documento_model', 'dm');
	}
	
	public function adolescente($id)
	{

		$dados = array();
		$dados['ado'] = $this->am->GetById('id_adolescente', $id);
		$dados['doc'] = $this->dm->GetById('adolescente_id', $id);
		$dados['cf'] = $this->gfm->GetById('grupo_familiar_id', $id);

		$this->blade->view('grupo_familiar/iuCF', $dados);
	}

	
	public function save($id)
	{
		$obj = Array();
		$dados = $this->gfm->GetById('adolescente_id', $id);
		
		if ($dados['adolescente_id'] == $id) {
			return redirect('ComposicaoFamiliar/adolescente/'. $id);
		} else {
			$obj['adolescente_id'] = $id;
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->gfm->Insert($obj);

			return redirect('ComposicaoFamiliar/adolescente/'. $id);
		};
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->gfm->GetById('id_grupo_familiare', $id);
		$this->blade->view('grupo_familiar/iuGF', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->gfm->DeleteLogico($id);
	}


	public function Ajax_Datatables()
	{

	}

	public function select2Json()
	{

	}
}
