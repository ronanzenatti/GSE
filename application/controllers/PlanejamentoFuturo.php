<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlanejamentoFuturo extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('PlanejamentoFuturo_model', 'pfm');
		$this->load->model('Adolescente_model', 'am');
	}

	public function index()
	{
		$this->blade->view('planejamentos_futuros/listar');
	}

	public function inserir()
	{
		$this->blade->view('planejamentos_futuros/iuPF');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');

		$obj['id_adolescente'] = $this->input->post('adolescente_id');
		$obj['futuro'] = $this->input->post('futuro');
		$obj['interesse_familia'] = $this->input->post('interesse_familia');
		$obj['influencia_negativa'] = $this->input->post('influencia_negativa');
		
		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->pfm->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->pfm->Update($id, $obj);
		}
		redirect('PlanejamentoFuturo/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->pfm->GetById('id_planejamento_futuro', $id);
		$this->blade->view('planejamentos_futuros/iuPF', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->pfm->DeleteLogico($id);
	}


	public function Ajax_Datatables()
	{

		$list = $this->pfm->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_planejamento_futuro;
			$row[] = $obj->futuro;
			$row[] = $obj->interesse_familia;
			$row[] = $obj->influencia_negativa;

			$btns = "<a href='" . base_url('PlanejamentoFuturo/alterar/' . $obj->id_planejamento_futuro) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"PlanejamentoFuturo\", " . $obj->id_planejamento_futuro . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->pfm->count_all(),
			"recordsFiltered" => $this->pfm->count_filtered(),
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

	// 	$all = $this->pfm->GetAll('nome', 'asc', true, $where);
	// 	if (isset($all)) {
	// 		foreach ($all as $i) {
	// 			array_push($res, array("id" => (int)$i['id_planejamento_futuro'], "text" => $i['nome']));
	// 		}
	// 	}

	// 	echo json_encode(array("results" => $res));
	// }
}
