<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pia extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Adolescente_model', 'am');
		$this->load->model('Documento_model', 'dm');
		$this->load->model("Contato_model", "com");
		$this->load->model("Endereco_model", "edm");
		$this->load->model('Entidade_model', 'em');
		$this->load->model('Pia_model', 'pm');
	}

	public function index()
	{
		$this->blade->view('pia/listar');
		//$this->blade->view('pia/bodyPia');
	}

	public function inserir()
	{
		$this->blade->view('pia/iuPia');
	}

	public function criarPia()
	{
		$obj = Array();

		$obj['adolescente_id'] = $this->input->post('idadolescente');

		$dataInicio = $this->input->post('data_inicio');
		$dataRecepcao = $this->input->post('data_recepcao');

		$obj['data_inicio'] = (empty($dataInicio)) ? null : date("Y-m-d", strtotime(str_replace("/", "-", $dataInicio)));
		$obj['data_recepcao'] = (empty($dataRecepcao)) ? null : date("Y-m-d", strtotime(str_replace("/", "-", $dataRecepcao)));

		$obj['created_at'] = date('Y-m-d H:i:s');
		$obj['updated_at'] = date('Y-m-d H:i:s');
		$this->pm->table = "pias";
		$id = $this->pm->Insert($obj);

		redirect('/pia/elaboracao/' . $id);
	}

	public function save()
	{
		$idPia = $this->input->post('idPia');
		parse_str($this->input->post('form'), $form);

		$form['data_recepcao'] = (empty($form['data_recepcao'])) ? null : date("Y-m-d", strtotime(str_replace("/", "-", $form['data_recepcao'])));
		$form['data_inicio'] = (empty($form['data_inicio'])) ? null : date("Y-m-d", strtotime(str_replace("/", "-", $form['data_inicio'])));
		$form['updated_at'] = date('Y-m-d H:i:s');
		$form['motivacao'] = $this->input->post('motivacao');
		$form['reflexao'] = $this->input->post('reflexao');

		$this->pm->table = "pias";
		$this->pm->Update($idPia, $form);
		echo $idPia;
	}

	public function elaboracao($id)
	{
		$dados = array();
		$dados['id'] = $id;
		$dados['obj'] = $this->pm->GetById('id_pia', $id);
		$dados['obj']['data_inicio'] = (!empty($dados['obj']['data_inicio'])) ? date("d/m/Y", strtotime($dados['obj']['data_inicio'])) : null;
		$dados['obj']['data_recepcao'] = (!empty($dados['obj']['data_recepcao'])) ? date("d/m/Y", strtotime($dados['obj']['data_recepcao'])) : null;
		$dados['processos'] = $this->pm->getTotalProcessos($dados['obj']['adolescente_id'], $id);
		$qtdeProcessos = 0;
		foreach ($dados['processos'] as $p) {
			$qtdeProcessos = $qtdeProcessos + $p->qtdeProcessos;
		}
		$dados['obj']['qtdeProcessos'] = $qtdeProcessos;

		$dados['ado'] = $this->am->GetById('id_adolescente', $dados['obj']['adolescente_id']);
		$dados['ado']['dt_nasc'] = (!empty($dados['ado']['dt_nasc'])) ? date("d/m/Y", strtotime($dados['ado']['dt_nasc'])) : null;

		$dados['doc'] = $this->dm->GetById('adolescente_id', $dados['obj']['adolescente_id']);
		$dados['doc']['rg_emissao'] = (!empty($dados['objD']['rg_emissao'])) ? date("d/m/Y", strtotime($dados['objD']['rg_emissao'])) : null;

		$this->blade->view('pia/bodyPia', $dados);
	}

	public function Ajax_Datatables()
	{
		$list = $this->pm->Get_Datatables('p');
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_pia;
			$row[] = $obj->nome;
			$row[] = $obj->rg;
			$row[] = date('d/m/Y', strtotime($obj->data_recepcao));

			$btns = "<a href='" . base_url('pia/elaboracao/' . $obj->id_pia) . "' class='btn btn-warning btn-sm'><i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"pia\", " . $obj->id_pia . ", \"tablePia\")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>  ";
//			$btns .= "<a target='_blank' href='" . base_url('adolescente/gerar/' . $obj->idadolescente . '/' . $_SESSION['entidade_id']) . "' class='btn btn-primary btn-sm'><i class='fa fa-file-pdf-o' aria-hidden='true'></i></a> ";

			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->pm->Count_All('p'),
			"recordsFiltered" => $this->pm->Count_Filtered('p'),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}
}
