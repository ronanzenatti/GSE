<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saude extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Saude_model', 'sm');
		$this->load->model('Adolescente_model', 'am');
		$tipoEntidade = $this->em->GetById('id_entidade', $_SESSION['entidade_id']);

		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template' || $tipoEntidade["tipo"] != 'S') {
			header('Location: /principal');
		}
	}

	public function index()
	{
		$this->blade->view('saude/listar');
	}

	public function inserir()
	{
		$this->blade->view('saude/iuSaude');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');
		
		$obj['id_adolescente'] = $this->input->post('adolescente_id');
		$obj['problemas_saude'] = $this->input->post('problemas_saude');;
		$obj['tratamentos'] = $this->input->post('tratamentos');
		$obj['psicologico_psiquiatrico'] = $this->input->post('psicologico_psiquiatrico');
		$obj['cigarro_inicio'] = $this->input->post('cigarro_inicio');
		$obj['cigarros_frequencia'] = $this->input->post('cigarros_frequencia');
		$obj['cigarros_quantidade'] = $this->input->post('cigarros_quantidade');
		$obj['bebidas_inicio'] = $this->input->post('bebidas_inicio');
		$obj['bebidas_frequencia'] = $this->input->post('bebidas_frequencia');
		$obj['bebidas_quantidade'] = $this->input->post('bebidas_quantidade');
		$obj['drogas'] = $this->input->post('drogas');
		$obj['drogas_inicio'] = $this->input->post('drogas_inicio');
		$obj['drogas_frequencia'] = $this->input->post('drogas_frequencia');
		$obj['drogas_quantidade'] = $this->input->post('drogas_quantidade');
		$obj['medicamentos'] = $this->input->post('medicamentos');
		$obj['doenca_familia'] = $this->input->post('doenca_familia');
		
		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->sm->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->sm->Update($id, $obj);
		}
		redirect('Saude/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->sm->GetById('id_saude', $id);
		$this->blade->view('saude/iuSaude', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->sm->DeleteLogico($id);
	}

	public function Ajax_Datatables()
	{

		$list = $this->sm->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->problemas_saude;
			$row[] = $obj->tratamentos;
			$row[] = $obj->psicologico_psiquiatrico;
			$row[] = $obj->cigarro_inicio;
			$row[] = $obj->cigarros_frequencia;
			$row[] = $obj->cigarros_quantidade;
			$row[] = $obj->bebidas_inicio;
			$row[] = $obj->bebidas_frequencia;
			$row[] = $obj->bebidas_quantidade;
			$row[] = $obj->drogas;
			$row[] = $obj->drogas_inicio;
			$row[] = $obj->drogas_frequencia;
			$row[] = $obj->drogas_quantidade;
			$row[] = $obj->medicamentos;
			$row[] = $obj->doenca_familia;
			

			$btns = "<a href='" . base_url('Saude/alterar/' . $obj->id_saude) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"Saude\", " . $obj->id_saude . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->sm->count_all(),
			"recordsFiltered" => $this->sm->count_filtered(),
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

	// 	$all = $this->sm->GetAll('nome', 'asc', true, $where);
	// 	if (isset($all)) {
	// 		foreach ($all as $i) {
	// 			array_push($res, array("id" => (int)$i['id_saude'], "text" => $i['nome']));
	// 		}
	// 	}

	// 	echo json_encode(array("results" => $res));
	// }
}

