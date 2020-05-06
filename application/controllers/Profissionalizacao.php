<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profissionalizacao extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Profissionalizacao_model', 'prom');
		$this->load->model('Adolescente_model', 'am');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}

	}

	public function index()
	{
		$this->blade->view('profissionalizacao/listar');
	}

	public function inserir()
	{
		$this->blade->view('profissionalizacao/iuProfissionalizacao');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');

		$obj['id_adolescente'] = $this->input->post('adolescente_id');
		$obj['registrado'] = $this->input->post('registrado');
		$obj['interesses_cursos'] = $this->input->post('interesses_cursos');

		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->prom->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->prom->Update($id, $obj);
		}
		redirect('Profissionalizacao/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->prom->GetById('id_profissionalizacao', $id);
		$this->blade->view('profissionalizacao/iuProfissionalizacao', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->prom->DeleteLogico($id);
	}

	public function Ajax_Datatables()
	{

		$list = $this->prom->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_profissionalizacao;
			$row[] = $obj->registrado;
			$row[] = $obj->interesses_cursos;


			$btns = "<a href='" . base_url('Profissionalizacao/alterar/' . $obj->id_profissionalizacao) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"Profissionalizacao\", " . $obj->id_profissionalizacao . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->prom->count_all(),
			"recordsFiltered" => $this->prom->count_filtered(),
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

	// 	$all = $this->prom->GetAll('nome', 'asc', true, $where);
	// 	if (isset($all)) {
	// 		foreach ($all as $i) {
	// 			array_push($res, array("id" => (int)$i['id_profissionalizacao'], "text" => $i['nome']));
	// 		}
	// 	}

	// 	echo json_encode(array("results" => $res));
	// }
}

