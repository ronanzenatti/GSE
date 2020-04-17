<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValidarTermo extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('TermoCompromisso_model', 'tcm');
		$this->load->model('Funcionario_model', 'fm');
		$this->load->model('Entidade_model', 'em');
		$this->load->model('Usuario_model', 'um');
	}

	public function index()
	{
		$this->blade->view('validar_termo/listar');
	}

	public function save()
	{

	}

	public function alterar()
	{

	}

	public function deletar()
	{

	}

	public function validar($id)
	{
		$obj['objFuncionario'] = $this->fm->GetById('id_funcionario', $id);
		$obj['objUsuario'] = $this->um->GetById('funcionario_id', $id);
		$obj['objEntidade'] = $this->em->GetById('id_entidade', $obj['objFuncionario']['entidade_id']);
		$obj['objTermo'] = $this->tcm->GetById('id_termo', $obj['objUsuario']['termo_id']);
		$this->blade->view('validar_termo/validar', $obj);
	}

	public function Ajax_Datatables()
	{
		$list = $this->fm->Get_Datatables('f');
		$data = array();
		// $dados = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$usuario = $this->um->GetById('funcionario_id', $obj->id_funcionario);
			$termo = $this->tcm->GetById('id_termo', $usuario['termo_id']);
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_funcionario;
			$row[] = $obj->nome;
			$row[] = $obj->entidade;
			$row[] = $termo['nome'];
			$row[] = $usuario['data_termo'];

			if ($usuario['data_termo'] != null) {
				$btns = "<a target='_blank' href='" . base_url('TermoCompromisso/visualizar/' . $termo['id_termo']) . "' class='btn btn-info btn-sm'>Visualizar</a> ";
				$btns .= "<button type='button' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			} else {
				$btns = "<a href='" . base_url('ValidarTermo/validar/' . $obj->id_funcionario) . "' class='btn btn-success btn-sm'>Validar</a>";
			}
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->tcm->count_all(),
			"recordsFiltered" => $this->tcm->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

}
