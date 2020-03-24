<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeneficioFamilia extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('BeneficioFamilia_model', 'bf');
	}

	public function index()
	{
		$this->blade->view('beneficio_familia/listar');
	}

	public function inserir()
	{
		$this->blade->view('beneficio_familia/iuBF');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');

		$obj['nome'] = mb_strtoupper($this->input->post('nome'), 'UTF-8');
		$obj['valor'] = $this->input->post('valor');
		$obj['ativo'] = $this->input->post('ativo');
		$obj['motivo'] = $this->input->post('motivo');

		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->bf->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->bf->Update($id, $obj);
		}
		redirect('BeneficioFamilia/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->bf->GetById('id_beneficio_familia', $id);
		$this->blade->view('beneficio_familia/iuBF', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->bf->DeleteLogico($id);
	}


	public function Ajax_Datatables()
	{

		$list = $this->bf->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_beneficio_familia;
			$row[] = $obj->grupo_familiar_id;
			$row[] = $obj->nome;
			$row[] = $obj->valor;
			$row[] = $obj->ativo;
			$row[] = $obj->motivo;

			$btns = "<a href='" . base_url('BeneficioFamilia/alterar/' . $obj->id_beneficio_familia) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"BeneficioFamilia\", " . $obj->id_beneficio_familia . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->bf->count_all(),
			"recordsFiltered" => $this->bf->count_filtered(),
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

		$all = $this->bf->GetAll('nome', 'asc', true, $where);
		if (isset($all)) {
			foreach ($all as $i) {
				array_push($res, array("id" => (int)$i['id_beneficio_familia'], "text" => $i['nome']));
			}
		}

		echo json_encode(array("results" => $res));
	}
}
