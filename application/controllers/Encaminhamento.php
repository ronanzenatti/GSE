<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encaminhamento extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Encaminhamento_model', 'encm');
		$this->load->model('Entidade_model', 'em');
		$this->load->model('Pia_model', 'pm');
	}

	public function index()
	{
		$this->blade->view('encaminhamentos/listar');
	}

	public function inserir()
	{
		$this->blade->view('encaminhamentos/iuEncaminhamento');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');

		$obj['pia_id'] = $this->input->post('id_pia');
		$obj['entidade_id'] = $this->input->post('id_entidade');
		$obj['descricao'] = mb_strtoupper($this->input->post('descricao'), 'UTF-8');
		$obj['data_limite'] = (!empty($obj['data_limite'])) ? date('Y-m-d', strtotime(str_replace("/", "-", $obj['data_limite']))) : null;
		$obj['data_envio'] = (!empty($obj['data_envio'])) ? date('Y-m-d', strtotime(str_replace("/", "-", $obj['data_envio']))) : null;
		$obj['usuario'] = $this->input->post('usuario');

		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->encm->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->encm->Update($id, $obj);
		}
		redirect('Encaminhamento/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->encm->GetById('id_encaminhamento', $id);
		$this->blade->view('encaminhamentos/iuEncaminhamento', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->encm->DeleteLogico($id);
	}

	public function Ajax_Datatables()
	{

		$list = $this->encm->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_encaminhamento;
			$row[] = $obj->pia_id;
			$row[] = $obj->entidade_id;
			$row[] = $obj->descricao;
			$row[] = date('d/m/Y', strtotime($obj->data_limite));
			$row[] = date('d/m/Y', strtotime($obj->data_envio));
			$row[] = $obj->usuario;

			$btns = "<a href='" . base_url('encaminhamento/alterar/' . $obj->id_encaminhamento) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"Encaminhamento\", " . $obj->id_encaminhamento . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->encm->count_all(),
			"recordsFiltered" => $this->encm->count_filtered(),
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

		$all = $this->encm->GetAll('nome', 'asc', true, $where);
		if (isset($all)) {
			foreach ($all as $i) {
				array_push($res, array("id" => (int)$i['id_encaminhamento'], "text" => $i['nome']));
			}
		}

		echo json_encode(array("results" => $res));
	}
}
