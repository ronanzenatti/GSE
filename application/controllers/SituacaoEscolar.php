<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SituacaoEscolar extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('SituacaoEscolar_model', 'sem');
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
		$obj = Array();
		$id = $this->input->post('id_');
		
		$obj['grau_escolaridade'] = $this->input->post('grau_escolaridade');
		$obj['estudando'] = $this->input->post('estudando');
		$obj['ano_abandono'] = $this->input->post('ano_abandono');
		$obj['ultima_escola'] = $this->input->post('ultima_escola');
		$obj['retornar'] = $this->input->post('retornar');
		$obj['atestado_matricula'] = $this->input->post('atestado_matricula');

		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->sem->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->sem->Update($id, $obj);
		}
		redirect('SituacaoEscolar/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->sem->GetById('id_situacao_escolar', $id);
		$this->blade->view('situacoes_escolares/iuSE', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->sem->DeleteLogico($id);
	}

	public function Ajax_Datatables()
	{

		$list = $this->sem->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_situacao_escolar;
			$row[] = $obj->grau_escolaridade;
			$row[] = $obj->estudando;
			$row[] = $obj->ano_abandono;
			$row[] = $obj->ultima_escola;
			$row[] = $obj->retornar;
			$row[] = $obj->atestado_matricula;

			$btns = "<a href='" . base_url('SituacaoEscolar/alterar/' . $obj->id_situacao_escolar) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"SituacaoEscolar\", " . $obj->id_situacao_escolar . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->sem->count_all(),
			"recordsFiltered" => $this->sem->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	// public function select2Json()
	// {
	// 	$res = array();
	// 	$term = $this->input->post('term');
	// 	if (isset($term))
	// 		$where = "nome LIKE '%$term%'";
	// 	else
	// 		$where = null;

	// 	$all = $this->sem->GetAll('nome', 'asc', true, $where);
	// 	if (isset($all)) {
	// 		foreach ($all as $i) {
	// 			array_push($res, array("id" => (int)$i['id_situacao_escolar'], "text" => $i['nome']));
	// 		}
	// 	}

	// 	echo json_encode(array("results" => $res));
	// }
}

