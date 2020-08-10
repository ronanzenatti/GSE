<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LazerCulturaEsporte extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Adolescente_model', 'am');
		$this->load->model('Documento_model', 'dm');
		$this->load->model('LazerCulturaEsporte_model', 'lcem');
		$this->load->model('Pia_model', 'pm');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}
	}

	public function index()
	{
		$this->blade->view('lce/listar');
	}

	public function inserir()
	{
		$this->blade->view('lce/iuLCE');
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
		//redirect('');
	}
	
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

		$dados['lce'] = $this->lcem->GetById('adolescente_id', $dados['obj']['adolescente_id']);
				
		$this->blade->view('lce/bodyPia', $dados);
	}



	// public function alterar($id)
	// {
	// 	$dados = Array();
	// 	$dados['obj'] = $this->lcem->GetById('id_lce', $id);
	// 	$this->blade->view('lce/iuLCE', $dados);
	// }

	// public function deletar()
	// {
	// 	$id = $this->input->post('id');
	// 	return $this->lcem->DeleteLogico($id);
	// }


	// public function Ajax_Datatables()
	// {

	// 	$list = $this->lcem->Get_Datatables();
	// 	$data = array();
	// 	$no = $_POST['start'];
	// 	foreach ($list as $obj) {
	// 		$no++;
	// 		$row = array();
	// 		//    $row[] = $no;
	// 		$row[] = $obj->id_lce;
	// 		$row[] = $obj->cultural_participa;
	// 		$row[] = $obj->cultural_interesse;
	// 		$row[] = $obj->esportiva_participa;
	// 		$row[] = $obj->esportiva_interesse;
	// 		$row[] = $obj->lazer;
	
	// 		$btns = "<a href='" . base_url('LazerCulturaEsporte/alterar/' . $obj->id_lce) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
	// 		$btns .= "<button type='button' onclick='deletarRegistro(\"LazerCulturaEsporte\", " . $obj->id_lce . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
	// 		$row[] = $btns;

	// 		$data[] = $row;
	// 	}

	// 	$output = array(
	// 		"draw" => $_POST['draw'],
	// 		"recordsTotal" => $this->lcem->count_all(),
	// 		"recordsFiltered" => $this->lcem->count_filtered(),
	// 		"data" => $data,
	// 	);
	// 	//output to json format
	// 	echo json_encode($output);
	// }

	// public function select2Json()
	// {
	// 	$res = array();
	// 	$term = $this->input->post('term');
	// 	if (isset($term))
	// 		$where = "nome LIKE '%$term%'";
	// 	else
	// 		$where = null;

	// 	$all = $this->lcem->GetAll('nome', 'asc', true, $where);
	// 	if (isset($all)) {
	// 		foreach ($all as $i) {
	// 			array_push($res, array("id" => (int)$i['id_lce'], "text" => $i['nome']));
	// 		}
	// 	}

	// 	echo json_encode(array("results" => $res));
	// }
}
