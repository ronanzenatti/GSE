<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Cargo_model', 'cm');
	}

	public function index()
	{
		$this->blade->view('cargos/listar');
	}

	public function inserir()
	{
		$this->blade->view('cargos/iuCargo');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');

		$obj['nome'] = $this->input->post('nome');
		$obj['descricao'] = $this->input->post('descricao');

		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->cm->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->cm->Update('idcargo', $id, $obj);
		}
		redirect('cargo/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->cm->GetById('idcargo', $id);
		$this->blade->view('cargos/iuCargo', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		$dados = Array();
		$dados['deleted_at'] = date('Y-m-d H:i:s');
		return $this->cm->Update('idcargo', $id, $dados);
	}


	public function Ajax_Datatables()
	{

		$list = $this->cm->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->idcargo;
			$row[] = $obj->nome;
			$row[] = $obj->descricao;

			$btns = "<a href='" . base_url('cargo/alterar/' . $obj->idcargo) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"cargo\", " . $obj->idcargo . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->cm->count_all(),
			"recordsFiltered" => $this->cm->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function select2Json()
	{
		$res = array();
		$term = $this->input->post('term');
		if (isset($term))
			$where = "nome LIKE '%$term%'";
		else
			$where = null;

		$all = $this->cm->GetAll('nome', 'asc', true, $where);
		if (isset($all)) {
			foreach ($all as $i) {
				array_push($res, array("id" => (int)$i['idcargo'], "text" => $i['nome']));
			}
		}

		echo json_encode(array("results" => $res));
	}
}
