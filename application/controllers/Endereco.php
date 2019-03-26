<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Endereco extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Endereco_model', 'emm');
	}

	public function index()
	{
		$this->blade->view('enderecos/listar');
	}

	public function show()
	{
		$idPessoa = $this->input->post('idpessoa');

		$dados = Array();
		$dados['obj'] = $this->pm->GetById('idpessoa', $idPessoa);
		$this->blade->view('adolescentes/modals/showEndereco', $dados);
	}

	public function save()
	{
		parse_str($this->input->post('form'), $form);
		$form['idadolescente'] = $this->input->post('idadolescente');

		$ativo = isset($form['ativoE']) ? true : false;

		$form['descricao'] = $form['descricaoE'];

		unset($form['ativoE']);
		unset($form['descricaoE']);

		if (empty($form['dt_mudanca']) || $ativo) {
			$form['dt_mudanca'] = null;
			$form['motivo'] = null;
		} else {
			$form['dt_mudanca'] = date('Y-m-d', strtotime(str_replace("/", "-", $form['dt_mudanca'])));
		}

		if (empty($form['idendereco'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			echo $this->emm->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->emm->Update('idendereco', $form['idendereco'], $form);
			echo $form['idendereco'];
		}
	}

	public function alterar()
	{
		$idA = $this->input->post('idadolescente');
		$idE = $this->input->post('idE');

		$dados = Array();
		$dados = $this->emm->GetById('idendereco', $idE);
		if (!empty($dados['dt_mudanca'])) {
			$dados['dt_mudanca'] = date("d/m/Y", strtotime($dados['dt_mudanca']));
		}
		echo json_encode($dados);
	}

	public function Ajax_Datatables()
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
				$btns = "<a href='" . base_url('SituacaoHabitacional/endereco/' . $obj->idendereco) . "' class='btn btn-info btn-sm' class='btn btn-info btn-sm' data-toggle='tooltip' data-placement='top' title='Situação Habitacional' data-original-title='Situação Habitacional'><i class='fa fa-home' aria-hidden='true'></i></a> ";
				$btns .= "<a href='" . base_url('ComposicaoFamiliar/endereco/' . $obj->idendereco) . "' class='btn btn-info btn-sm' class='btn btn-info btn-sm' data-toggle='tooltip' data-placement='top' title='Composição Familiar' data-original-title='Composição Familiar'><i class='fa fa-users' aria-hidden='true'></i></a> ";
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

	public function deletar()
	{
		$id = $this->input->post('id');
		$obj = Array();
		$obj['deleted_at'] = date('Y-m-d H:i:s');
		return $this->emm->Update('idendereco', $id, $obj);
	}
}
