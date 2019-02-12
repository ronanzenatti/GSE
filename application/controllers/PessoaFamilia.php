<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PessoaFamilia extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('PessoaFamilia_model', 'pfm');
		$this->load->model('Adolescente_model', 'am');
		$this->load->model("Endereco_model", "edm");
		$this->load->model('Documento_model', 'dm');
	}

	public function Ajax_Datatables()l
	{
		$idpessoa = (empty($this->input->post('idadolescente'))) ? 0 : $this->input->post('idadolescente');
		$listar = (empty($this->input->post('listar'))) ? 1 : 0;
		$where = array("idadolescente" => $idpessoa);
		$list = $this->emm->Get_Datatables(null, $where);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->descricao;
			$row[] = $obj->logradouro;
			$row[] = $obj->numero;
			$row[] = $obj->bairro;
			$row[] = $obj->cidade . " - " . $obj->estado;
			$row[] = (empty($obj->dt_mudanca)) ? "<strong class='text-success'>SIM</strong>" : "<strong class='text-danger'>NÃO</strong>";
			if ($listar) {
				$btns = "<button type='button' onclick='iuEndereco($obj->idendereco)' class='btn btn-warning btn-sm '> <i class='fa fa-pencil' aria-hidden='true'></i></button> ";
			} else {
				$btns = "<a href='" . base_url('situacaohabitacional/endereco/' . $obj->idendereco) . "' class='btn btn-info btn-sm' class='btn btn-info btn-sm' data-toggle='tooltip' data-placement='top' title='Situação Habitacional' data-original-title='Situação Habitacional'><i class='fa fa-home' aria-hidden='true'></i></a> ";
				$btns .= "<a href='" . base_url('composicaofamiliar/endereco/' . $obj->idendereco) . "' class='btn btn-info btn-sm' class='btn btn-info btn-sm' data-toggle='tooltip' data-placement='top' title='Composição Familiar' data-original-title='Composição Familiar'><i class='fa fa-users' aria-hidden='true'></i></a> ";
			}
			$btns .= " <button type='button' onclick='deletarRegistro(\"endereco\", " . $obj->idendereco . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->emm->count_all(null, $where),
			"recordsFiltered" => $this->emm->count_filtered(null, $where),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}
}
