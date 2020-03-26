<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HorarioFamiliar extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('HorarioFamiliar_model', 'hfm');
		$this->load->model('Adolescente_model', 'am');
	}

	public function index()
	{
		$this->blade->view('horarios_familiar/listar');
	}

	public function inserir()
	{
		$this->blade->view('horarios_familiar/iuHF');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');

		$obj['id_adolescente'] = $this->input->post('adolescente_id');
		$obj['chega_tarde'] = ($this->input->post('chega_tarde'));
		$obj['compromissos'] = ($this->input->post('compromissos'));
		$obj['periodo_rua'] = ($this->input->post('periodo_rua'));


		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->hfm->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->hfm->Update($id, $obj);
		}
		redirect('HorarioFamiliar/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->hfm->GetById('id_horarios_familia', $id);
		$this->blade->view('horarios_familiar/iuHF', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->hfm->DeleteLogico($id);
	}


	public function Ajax_Datatables()
	{

		$list = $this->hfm->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_horarios_familia;
			$row[] = $obj->chega_tarde;
			$row[] = $obj->compromissos;
			$row[] = $obj->periodo_rua;
			

			$btns = "<a href='" . base_url('HorarioFamiliar/alterar/' . $obj->id_horarios_familia) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"HorarioFamiliar\", " . $obj->id_horarios_familia . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->hfm->count_all(),
			"recordsFiltered" => $this->hfm->count_filtered(),
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

	// 	$all = $this->hfm->GetAll('nome', 'asc', true, $where);
	// 	if (isset($all)) {
	// 		foreach ($all as $i) {
	// 			array_push($res, array("id" => (int)$i['id_horarios_familia'], "text" => $i['nome']));
	// 		}
	// 	}

	// 	echo json_encode(array("results" => $res));
	// }
}
