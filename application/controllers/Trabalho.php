<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabalho extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Trabalho_model', 'tm');
		$this->load->model('Adolescente', 'am');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}
	}

	public function index()
	{
		$this->blade->view('trabalhos/listar');
	}

	public function inserir()
	{
		$this->blade->view('trabalhos/iuTrabalho');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');

		$obj['id_adolescente'] = $this->input->post('adolescente_id');
		$obj['id_trabalho'] = $this->input->post('id_trabalho');
		$obj['empresa'] = $this->input->post('empresa');
		$obj['salario'] = $this->input->post('salario');
		$obj['dt_inicio'] = date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post['dt_inicio'])));
		$obj['horario_inicio'] = date("H:i", strtotime(str_replace(":", $this->input->post['horario_inicio'])));
		$obj[''] = date("H:i", strtotime(str_replace(":", $this->input->post['horario_fim'])));
		$obj['dt_recisao'] = date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post['dt_recisao'])));
		$obj['obs'] = $this->input->post('obs');
		$obj['motivo_recisao'] = $this->input->post('motivo_recisao');
		$obj['tipo'] = $this->input->post('tipo');


	if (empty($id)) {
		$obj['created_at'] = date('Y-m-d H:i:s');
		$obj['updated_at'] = date('Y-m-d H:i:s');
		$this->tm->Insert($obj);
	} else {
		$obj['updated_at'] = date('Y-m-d H:i:s');
		$this->tm->Update($id, $obj);
	}
	redirect('Trabalho/');

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->tm->GetById('id_trabalho', $id);
		$this->blade->view('trabalhos/iuTrabalho', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->tm->DeleteLogico($id);
	}

	public function Ajax_Datatables()
	{

		$list = $this->tm->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj-id_trabalho>;
			$row[] = $obj->empresa;
			$row[] = $obj->salario;
			$row[] = date('d/m/Y', strtotime($obj->dt_inicio));
			$row[] = date('H:i', strtotime($obj->horario_inicio));
			$row[] = date('H:i', strtotime($obj->horario_fim));
			$row[] = date('d/m/Y', strtotime($obj->dt_recisao));
			$row[] = $obj->obs;
			$row[] = $obj->motivo_recisao;
			$row[] = $obj->tipo;

			$btns = "<a href='" . base_url('Trabalho/alterar/' . $obj->id_trabalho) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"Trabalho\", " . $obj->id_trabalho . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->tm->count_all(),
			"recordsFiltered" => $this->tm->count_filtered(),
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

	// 	$all = $this->tm->GetAll('nome', 'asc', true, $where);
	// 	if (isset($all)) {
	// 		foreach ($all as $i) {
	// 			array_push($res, array("id" => (int)$i['id_situacao_escolar'], "text" => $i['nome']));
	// 		}
	// 	}

	// 	echo json_encode(array("results" => $res));
	// }
}
