<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Cargo_model', 'cm');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}
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

		$obj['nome'] = mb_strtoupper($this->input->post('nome'), 'UTF-8');
		$obj['descricao'] = $this->input->post('descricao');

		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->cm->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->cm->Update($id, $obj);
		}
		redirect('cargo/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->cm->GetById('id_cargo', $id);
		$this->blade->view('cargos/iuCargo', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->cm->DeleteLogico($id);
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
			$row[] = $obj->id_cargo;
			$row[] = $obj->nome;
			$row[] = $obj->descricao;

			$btns = "<a href='" . base_url('cargo/alterar/' . $obj->id_cargo) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"cargo\", " . $obj->id_cargo . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
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
				array_push($res, array("id" => (int)$i['id_cargo'], "text" => $i['nome']));
			}
		}

		echo json_encode(array("results" => $res));
	}
}
