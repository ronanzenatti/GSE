<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model', 'um');
		$this->load->model('Funcionario', 'fm');
		$this->load->model('Cargo', 'cm');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}
	}

	public function index()
	{
		$this->blade->view('usuarios/listar');
	}

	public function inserir()
	{
		$this->blade->view('usuarios/iuUsuario');
	}

	public function save()
	{
		$obj = Array();
		$id = $this->input->post('id_');
		
		$obj['id_usuario'] = $this->input->post('id_usuario');
		$obj['id_funcionario'] = $this->input->post('funcionario_id');
		$obj['id_cargo'] = $this->input->post('cargo_id');
		$obj['ip_adress'] = $this->input->post('ip_adress');
		$obj['salt'] = $this->input->post('salt');
		$obj['email'] = $this->input->post('email');
		$obj['password'] = $this->input->post('password');
		$obj['username'] = $this->input->post('username');
		$obj['activation_code'] = $this->input->post('activation_code');
		$obj['forgotten_password_code'] = $this->input->post('forgotten_password_code');
		$obj['forgotten_password_time'] = $this->input->post('forgotten_password_time');
		$obj['remember_code'] = $this->input->post('remember_code');
		$obj['last_login'] = $this->input->post('last_login');
		$obj['active'] = $this->input->post('active');
		$obj['termo'] = $this->input->post('termo');
		$obj['data_termo'] = date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post['data_termo'])));
		
		if (empty($id)) {
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->um->Insert($obj);
		} else {
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->um->Update($id, $obj);
		}
		redirect('Usuario/');
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->um->GetById('id_usuario', $id);
		$this->blade->view('usuarios/iuUsuario', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->um->DeleteLogico($id);
	}

	public function Ajax_Datatables()
	{

		$list = $this->um->Get_Datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_usuario;
			$row[] = $obj->email;
			$row[] = $obj->username;
			$row[] = $obj->last_login;
			$row[] = $obj->termo;
			$row[] = date('d/m/Y', strtotime($obj->data_termo));
			
			$btns = "<a href='" . base_url('Usuario/alterar/' . $obj->id_usuario) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"Usuario\", " . $obj->id_usuario . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->um->count_all(),
			"recordsFiltered" => $this->um->count_filtered(),
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

	// 	$all = $this->um->GetAll('nome', 'asc', true, $where);
	// 	if (isset($all)) {
	// 		foreach ($all as $i) {
	// 			array_push($res, array("id" => (int)$i['id_situacao_escolar'], "text" => $i['nome']));
	// 		}
	// 	}

	// 	echo json_encode(array("results" => $res));
	// }
}
