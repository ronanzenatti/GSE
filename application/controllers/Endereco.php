<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Endereco extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Endereco_model', 'enm');
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
		$form['adolescente_id'] = $this->input->post('id_adolescente');

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
		$this->enm->table = "enderecos";
		if (empty($form['id_endereco'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			echo $this->enm->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->enm->Update($form['id_endereco'], $form);
			echo $form['id_endereco'];
		}
	}

	public function alterar()
	{
		$idA = $this->input->post('id_adolescente');
		$idE = $this->input->post('idE');

		$dados = Array();
		$dados = $this->enm->GetById('id_endereco', $idE);
		if (!empty($dados['dt_mudanca'])) {
			$dados['dt_mudanca'] = date("d/m/Y", strtotime($dados['dt_mudanca']));
		}
		echo json_encode($dados);
	}

	public function Ajax_Datatables()
	{
		$idpessoa = (empty($this->input->post('id_adolescente'))) ? 0 : $this->input->post('id_adolescente');
		$listar = (empty($this->input->post('listar'))) ? 1 : 0;
		$where = array("adolescente_id" => $idpessoa);
		$list = $this->enm->Get_Datatables(null, $where);
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
				$btns = "<button type='button' onclick='iuEndereco($obj->id_endereco)' class='btn btn-warning btn-sm '> <i class='fa fa-pencil' aria-hidden='true'></i></button> ";
			} else {
				$btns = "<a href='" . base_url('SituacaoHabitacional/endereco/' . $obj->id_endereco) . "' class='btn btn-info btn-sm' class='btn btn-info btn-sm' data-toggle='tooltip' data-placement='top' title='Situação Habitacional' data-original-title='Situação Habitacional'><i class='fa fa-home' aria-hidden='true'></i></a> ";
			}
			$btns .= " <button type='button' onclick='deletarRegistro(\"endereco\", " . $obj->id_endereco . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->enm->count_all(null, $where),
			"recordsFiltered" => $this->enm->count_filtered(null, $where),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->enm->DeleteLogico($id);
	}
	
}
