<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entidade extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Entidade_model', 'em');
	}

	public function index()
	{
		$this->blade->view('entidades/listar');
	}

	public function inserir()
	{
		$this->blade->view('entidades/iuEntidade');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');

		$obj['nome'] = mb_strtoupper($this->input->post('nome'), 'UTF-8');
		$obj['tipo'] = $this->input->post('tipo');
		$obj['cnpj'] = $this->input->post('cnpj');
		$obj['logradouro'] = $this->input->post('logradouro');
		$obj['numero'] = $this->input->post('numero');
		$obj['bairro'] = $this->input->post('bairro');
		$obj['cidade'] = $this->input->post('cidade');
		$obj['estado'] = $this->input->post('estado');
		$obj['cep'] = $this->input->post('cep');
		$obj['telefones'] = $this->input->post('telefones');
		$obj['email'] = $this->input->post('email');
		$obj['responsavel'] = $this->input->post('responsavel');
		$obj['resp_tel'] = $this->input->post('resp_tel');
		$obj['resp_email'] = $this->input->post('resp_email');

		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->em->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->em->Update($id, $obj);
		}
		redirect('entidade/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->em->GetById('identidade', $id);
		$this->blade->view('entidades/iuEntidade', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->em->DeleteLogico($id);
	}


	public function Ajax_Datatables()
	{

		$list = $this->em->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->identidade;
			$row[] = $obj->nome;
			$row[] = $obj->cnpj;
			$row[] = $obj->telefones;
			$row[] = $obj->email;

			$btns = "<a href='" . base_url('entidade/alterar/' . $obj->identidade) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"entidade\", " . $obj->identidade . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->em->count_all(),
			"recordsFiltered" => $this->em->count_filtered(),
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

		$all = $this->em->GetAll('nome', 'asc', true, $where);
		if (isset($all)) {
			foreach ($all as $i) {
				array_push($res, array("id" => (int)$i['identidade'], "text" => $i['nome']));
			}
		}

		echo json_encode(array("results" => $res));
	}
}
