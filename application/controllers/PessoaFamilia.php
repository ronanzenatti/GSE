<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PessoaFamilia extends CI_Controller
{
	public $parentesco = array(
		0 => 'Própria',
		1 => 'Mãe',
		2 => 'Pai',
		3 => 'Madastra',
		4 => 'Padastro',
		5 => 'Irmã(o)',
		6 => 'Avó(Avo)',
		7 => 'Tia(o)',
		8 => 'Prima(o)',
		9 => 'Outros'
	);

	public $ocupacao = array(
		0 => 'Não Trabalha',
		1 => 'Autônomo Formal',
		2 => 'Rural',
		3 => 'Empregado sem Carteira',
		4 => 'Empregado com Carteira',
		5 => 'Doméstica(o)',
		6 => 'Trabalhador não remunerado',
		7 => 'Militar ou Servidor Público',
	);
	public $escolaridade = array(
		0 => 'Sem idade escolar',
		1 => 'Creche',
		2 => 'Pré-Escola',
		3 => 'Ensino Fundamental',
		4 => 'Ensino Médio',
		5 => 'Ensino Fundamental EJA',
		6 => 'Ensino Médio EJA',
		7 => 'Alfabetização para Adultos',
		8 => 'Superior/Aperfeiçoamento/Especialização/Doutorado',
		9 => 'Nunca Frequentou mas lê e escreve',
		10 => 'Não sabe ler e escrever',
	);

	function __construct()
	{
		parent::__construct();
		$this->load->model('PessoaFamilia_model', 'pfm');
		$this->load->model('ComposicaoFamiliar_model', 'cfm');
	}

	public function Ajax_Datatables()
	{
		$idcf = (empty($this->input->post('idcf'))) ? 0 : $this->input->post('idcf');
		$listar = (empty($this->input->post('listar'))) ? 1 : 0;
		$where = array("idcf" => $idcf);
		$list = $this->pfm->Get_Datatables(null, $where);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			//'idpf', 'idcf', 'nome', 'parentesco', 'dt_nasc', 'sexo', 'escolaridade', 'formacao_profissional', 'ocupacao', 'renda', 'telefones', 'obs'
			$row[] = $obj->nome;
			$row[] = $this->parentesco[$obj->parentesco];
			$row[] = $obj->dt_nasc;
			$row[] = $obj->sexo;
			$row[] = $this->escolaridade[$obj->escolaridade];
			$row[] = $obj->formacao_profissional;
			$row[] = $this->ocupacao[$obj->ocupacao];
			$row[] = number_format($obj->renda, 2, ',', '.');
			$row[] = $obj->telefones;
			if ($listar) {
				$btns = "<button type='button' onclick='iuResidente($obj->idpf)' class='btn btn-warning btn-sm '> <i class='fa fa-pencil' aria-hidden='true'></i></button> ";
			}
			$btns .= " <button type='button' onclick='deletarRegistro(\"PessoaFamilia\", " . $obj->idpf . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->pfm->count_all(null, $where),
			"recordsFiltered" => $this->pfm->count_filtered(null, $where),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function save()
	{
		parse_str($this->input->post('form'), $form);

		$form['idcf'] = $this->input->post('idcf');

		$form['nome'] = mb_strtoupper($form['nome'], 'UTF-8');

		$form['obs'] = $form['obsR'];
		unset($form['obsR']);

		$form['renda'] = str_replace(',', '.', str_replace('.', '', $form['renda']));

		if (empty($form['dt_nasc'])) {
			$form['dt_nasc'] = null;
		} else {
			$form['dt_nasc'] = date('Y-m-d', strtotime(str_replace("/", "-", $form['dt_nasc'])));
		}

		if (empty($form['idpf'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			echo $this->pfm->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->pfm->Update('idpf', $form['idpf'], $form);
			echo $form['idpf'];
		}
	}

	public function alterar()
	{
		$id = $this->input->post('idpf');
		$dados = $this->pfm->GetById('idpf', $id);
		$dados['renda'] = number_format($dados['renda'], 2, ',', '.');
		$dados['dt_nasc'] = date('d/m/Y', strtotime(	$dados['dt_nasc']));
		echo json_encode($dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		$obj = Array();
		$obj['deleted_at'] = date('Y-m-d H:i:s');
		return $this->pfm->Update('idcf', $id, $obj);
	}
}
