<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlanejamentoAtendimento extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('PlanejamentoAtendimento_model', 'pam');
		$this->load->model('Pia_model', 'pm');
	}

	public function index()
	{
		$this->blade->view('planejamentos_atendimentos/listar');
	}

	public function inserir()
	{
		$this->blade->view('planejamentos_atendimentos/iuPA');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');

		$objj['id_pia'] = $this->input->post('pia_id');
		$obj['tipo'] = $this->input->post('tipo');
		$obj['periodo'] = $this->input->post('periodo');
		$obj['data_inicio'] = date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post['data_inicio'])));;
		
		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->pam->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->pam->Update($id, $obj);
		}
		redirect('PlanejamentoAtendimento/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->pam->GetById('id_planejamento_atendimento', $id);
		$this->blade->view('planejamentos_atendimentos/iuPA', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->pam->DeleteLogico($id);
	}


	public function Ajax_Datatables()
	{

		$list = $this->pam->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_planejamento_atendimento;
			$row[] = $obj->tipo;
			$row[] = $obj->periodo;
			$row[] = date('d/m/Y', strtotime($obj->data_inicio));

			$btns = "<a href='" . base_url('PlanejamentoAtendimento/alterar/' . $obj->id_planejamento_atendimento) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"PlanejamentoAtendimento\", " . $obj->id_planejamento_atendimento . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->pam->count_all(),
			"recordsFiltered" => $this->pam->count_filtered(),
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

	// 	$all = $this->pam->GetAll('nome', 'asc', true, $where);
	// 	if (isset($all)) {
	// 		foreach ($all as $i) {
	// 			array_push($res, array("id" => (int)$i['id_planejamento_atendimento'], "text" => $i['nome']));
	// 		}
	// 	}

	// 	echo json_encode(array("results" => $res));
	// }
}
