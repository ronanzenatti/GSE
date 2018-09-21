<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Contato_model', 'com');
	}

	public function index()
	{
		$this->blade->view('contatos/listar');
	}


	public function save()
	{
		parse_str($this->input->post('form'), $form);
		$form['idpessoa'] = $this->input->post('idpessoa');

		$form['ativo'] = isset($form['ativo']) ? 1 : 0;

		if (empty($form['idcontato'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			echo $this->cm->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->cm->Update('idcontato', $form['idcontato'], $form);
			echo $form['idcontato'];
		}
	}

	public function iu()
	{
		$idPessoa = $this->input->post('idpessoa');
		$idC = $this->input->post('idC');

		$dados = Array();
		$dados['obj'] = $this->cm->GetById('idcontato', $idC);
		$this->blade->view('usuarios/modals/iuContato', $dados);
	}

	public function show()
	{
		$idPessoa = $this->input->post('idpessoa');

		$dados = Array();
		$dados['obj'] = $this->pm->GetById('idpessoa', $idPessoa);
		$this->blade->view('usuarios/modals/showContato', $dados);
	}

	public function Ajax_Datatables()
	{
		$idpessoa = $this->input->post('idpessoa');
		$idpessoa = 0;
		$where = array("idadolescente" => $idpessoa);
		$list = $this->com->Get_Datatables(null, $where);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->descricao;
			$row[] = $this->tipo[$obj->tipo_cont];
			$row[] = $obj->contato;
			$row[] = ($obj->ativo) ? "<strong class='text-success'>SIM</strong>" : "<strong class='text-danger'>NÃO</strong>";

			$btns = "<button type='button' onclick='iuContato($obj->idcontato)' class='btn btn-warning btn-sm '> <i class='fa fa-pencil' aria-hidden='true'></i></button> ";
			$btns .= " <button type='button' onclick='deletarRegistro(\"contatos\", " . $obj->idcontato . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->com->count_all(null, $where),
			"recordsFiltered" => $this->com->count_filtered(null, $where),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		$obj = Array();
		$obj['deleted_at'] = date('Y-m-d H:i:s');
		return $this->cm->Update('idcontato', $id, $obj);
	}
}
