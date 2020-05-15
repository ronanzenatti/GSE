<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Internacao extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Internacao_model', 'im');
		$this->load->model('Adolescente_model', 'am');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}
	}

	public function index()
	{
		$this->blade->view('internacoes/listar');
	}

	public function inserir()
	{
		$this->blade->view('internacoes/iuInternacao');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');

		$obj['id_adolescente'] = $this->input->post('adolescente_id');
		$obj['nome'] = ($this->input->post('nome'));
		$obj['quando'] = $this->input->post('quando');
		$obj['onde'] = $this->input->post('onde');
		$obj['periodo'] = $this->input->post('periodo');

		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->im->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->im->Update($id, $obj);
		}
		redirect('Internacao/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->im->GetById('id_internacao', $id);
		$this->blade->view('internacoes/iuInternacao', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->im->DeleteLogico($id);
	}


	public function Ajax_Datatables()
	{

		$list = $this->im->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_internacao;
			$row[] = $obj->quando;
			$row[] = $obj->onde;
			$row[] = $obj->periodo;

			$btns = "<a href='" . base_url('Internacao/alterar/' . $obj->id_internacao) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"cargo\", " . $obj->id_internacao . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->im->count_all(),
			"recordsFiltered" => $this->im->count_filtered(),
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

	// 	$all = $this->im->GetAll('nome', 'asc', true, $where);
	// 	if (isset($all)) {
	// 		foreach ($all as $i) {
	// 			array_push($res, array("id" => (int)$i['id_internacao'], "text" => $i['nome']));
	// 		}
	// 	}

	// 	echo json_encode(array("results" => $res));
	// }
}
