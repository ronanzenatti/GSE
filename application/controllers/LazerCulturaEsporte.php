<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LazerCulturaEsporte extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('LazerCulturaEsporte_model', 'lcem');
		$this->load->model('Adolescente_model');
	}

	public function index()
	{
		$this->blade->view('lce/listar');
	}

	public function inserir()
	{
		$this->blade->view('lce/iuLCE');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');

		$obj['id_adolescente'] = $this->input->post('adolescente_id');
		$obj['cultural_participa'] = $this->input->post('cultural_participa');
		$obj['cultural_interesse'] = $this->input->post('cultural_interesse');
		$obj['esportiva_participa'] = $this->input->post('esportiva_participa');
		$obj['esportiva_interesse'] = $this->input->post('esportiva_interesse');
		$obj['lazer'] = $this->input->post('lazer');

		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->lcem->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->lcem->Update($id, $obj);
		}
		redirect('LazerCulturaEsporte/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->lcem->GetById('id_lce', $id);
		$this->blade->view('lce/iuLCE', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->lcem->DeleteLogico($id);
	}


	public function Ajax_Datatables()
	{

		$list = $this->lcem->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_lce;
			$row[] = $obj->cultural_participa;
			$row[] = $obj->cultural_interesse;
			$row[] = $obj->esportiva_participa;
			$row[] = $obj->esportiva_interesse;
			$row[] = $obj->lazer;
	
			$btns = "<a href='" . base_url('LazerCulturaEsporte/alterar/' . $obj->id_lce) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"LazerCulturaEsporte\", " . $obj->id_lce . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->lcem->count_all(),
			"recordsFiltered" => $this->lcem->count_filtered(),
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

	// 	$all = $this->lcem->GetAll('nome', 'asc', true, $where);
	// 	if (isset($all)) {
	// 		foreach ($all as $i) {
	// 			array_push($res, array("id" => (int)$i['id_lce'], "text" => $i['nome']));
	// 		}
	// 	}

	// 	echo json_encode(array("results" => $res));
	// }
}
