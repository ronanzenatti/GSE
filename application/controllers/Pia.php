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
	}

	public function inserir()
	{
		$this->blade->view('pia/iuPia');
	}

	public function elaboracao()
	{
		$this->blade->view('pia/bodyPia');
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
			$row[] = $obj->id_adolescente;
			$row[] = $obj->nome;
			$row[] = $obj->RG;
			$row[] = date('d/m/Y', strtotime($obj->data_recepcao));

			$btns = "<a href='" . base_url('pia/alterar/' . $obj->id_pia) . "' class='btn btn-warning btn-sm'><i class='fa fa-pencil' aria-hidden='true'></i></a> ";
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
