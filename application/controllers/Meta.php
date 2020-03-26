<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meta extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Meta_model', 'mm');
		$this->load->model('Pia_model', 'pm');
	}

	public function index()
	{
		$this->blade->view('metas/listar');
	}

	public function inserir()
	{
		$this->blade->view('metas/iuMeta');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');
		
		$obj['id_pia'] = $this->input->post('pia_id');
		$obj['descricao'] = $this->input->post('descricao');
		$obj['data_limite'] = date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post['data_limite'])));
		$obj['usuario_id'] = $this->input->post('usuario_id');
		
		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->mm->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->mm->Update($id, $obj);
		}
		redirect('Meta/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->mm->GetById('id_meta', $id);
		$this->blade->view('metas/iuMeta', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->mm->DeleteLogico($id);
	}


	public function Ajax_Datatables()
	{

		$list = $this->mm->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_meta;
			$row[] = $obj->descricao;
			$row[] = $obj->data_limite;
			$row[] = $obj->usuario_id;

			$btns = "<a href='" . base_url('Meta/alterar/' . $obj->id_meta) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"Meta\", " . $obj->id_meta . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->mm->count_all(),
			"recordsFiltered" => $this->mm->count_filtered(),
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

	// 	$all = $this->mm->GetAll('nome', 'asc', true, $where);
	// 	if (isset($all)) {
	// 		foreach ($all as $i) {
	// 			array_push($res, array("id" => (int)$i['id_meta'], "text" => $i['nome']));
	// 		}
	// 	}

	// 	echo json_encode(array("results" => $res));
	// }
}
