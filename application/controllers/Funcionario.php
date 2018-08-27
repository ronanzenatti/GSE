<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Funcionario_model', 'fm');
		$this->load->model('Usuario_model', 'um');
		$this->load->model('Ion_auth_model', 'iam');
	}

	public function index()
	{
		$this->blade->view('funcionarios/listar');
	}


	public function inserir()
	{
		$this->blade->view('funcionarios/iufuncionario');
	}

	public function save()
	{
		$this->fm->table = "funcionarios";
		$this->um->table = "usuarios";

		$obj = Array();
		$usr = Array();
		$id = $this->input->post('id_');

		$obj['nome'] = $this->input->post('nome');
		$obj['dt_nasc'] = $this->input->post('dt_nasc');
		$obj['dt_nasc'] = (!empty($obj['dt_nasc'])) ? date('Y-m-d', strtotime(str_replace("/", "-", $obj['dt_nasc']))) : null;
		$obj['sexo'] = $this->input->post('sexo');
		$obj['logradouro'] = $this->input->post('logradouro');
		$obj['numero'] = $this->input->post('numero');
		$obj['bairro'] = $this->input->post('bairro');
		$obj['cidade'] = $this->input->post('cidade');
		$obj['estado'] = $this->input->post('estado');
		$obj['cep'] = $this->input->post('cep');
		$obj['telefones'] = $this->input->post('telefones');
		$obj['obs'] = $this->input->post('obs');
		$obj['identidade'] = $this->input->post('identidade');

		$usr['ip_address'] = $this->input->ip_address();

		$usr['idcargo'] = $this->input->post('idcargo');
		$usr['email'] = $this->input->post('email');
		$usr['password'] = $this->iam->hash_password($this->input->post('senha'));
		$usr['active'] = 1;
		$usr['termo'] = 0;

		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');

			$usr['created_at'] = date('Y-m-d H:i:s');
			$usr['updated_at'] = date('Y-m-d H:i:s');

			$id = $this->fm->Insert($obj);

			$usr['idfuncionario'] = $id;
			$this->um->Insert($usr);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$usr['updated_at'] = date('Y-m-d H:i:s');

			$this->fm->Update('idfuncionario', $id, $obj);
			$usrBD = $this->um->GetByFuncionario($id);
			if (empty($usr['password']))
				unset($usr['password']);

			$usr['idusuario'] = $usrBD['idusuario'];
			$this->um->Update('idusuario', $id, $usr);
		}

		redirect('funcionario/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->fm->GetById('idfuncionario', $id);
		$this->blade->view('funcionarios/iufuncionario', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		$dados = Array();
		$dados['deleted_at'] = date('Y-m-d H:i:s');
		return $this->fm->Update('idfuncionario', $id, $dados);
	}


	public function Ajax_Datatables()
	{

		$list = $this->fm->Get_Datatables('f');
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->idfuncionario;
			$row[] = $obj->nome;
			$row[] = $obj->entidade;
			$row[] = $obj->telefones;

			$btns = "<a href='" . base_url('funcionario/alterar/' . $obj->idfuncionario) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"funcionario\", " . $obj->idfuncionario . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->fm->count_all('f'),
			"recordsFiltered" => $this->fm->count_filtered('f'),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}
}
