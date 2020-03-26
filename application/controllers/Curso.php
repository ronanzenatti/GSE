<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Curso_model', 'cum');
		$this->load->model('Adolescente_model', 'am');
	}

	public function index()
	{
		$this->blade->view('cursos/listar');
	}

	public function inserir()
	{
		$this->blade->view('cursos/iuCurso');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');

		$obj['id_adolescente'] = $this->input->post('adolescente_id');
		$obj['nome'] = mb_strtoupper($this->input->post('nome'), 'UTF-8');
		$obj['instituicao'] = $this->input->post('instituicao');
		$obj['conclusao'] = $this->input->post('conclusao');

		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->cum->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->cum->Update($id, $obj);
		}
		redirect('Curso/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->cum->GetById('id_curso', $id);
		$this->blade->view('cursos/iuCurso', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->com->DeleteLogico($id);
	}

	public function Ajax_Datatables()
	{

		$list = $this->cum->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_curso;
			$row[] = $obj->nome;
			$row[] = $obj->instituicao;
			$row[] = $obj->conclusao;


			$btns = "<a href='" . base_url('Curso/alterar/' . $obj->id_curso) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"Curso\", " . $obj->id_curso . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->cum->count_all(),
			"recordsFiltered" => $this->cum->count_filtered(),
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

		$all = $this->cum->GetAll('nome', 'asc', true, $where);
		if (isset($all)) {
			foreach ($all as $i) {
				array_push($res, array("id" => (int)$i['id_curso'], "text" => $i['nome']));
			}
		}

		echo json_encode(array("results" => $res));
	}
}

