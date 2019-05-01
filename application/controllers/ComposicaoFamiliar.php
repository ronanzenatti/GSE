<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComposicaoFamiliar extends CI_Controller
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
		8 => 'Superior / Aperfeiçoamento / Especialização / Doutorado',
		9 => 'Nunca Frequentou mas lê e escreve',
		10 => 'Não sabe ler e escrever',
	);

	function __construct()
	{
		parent::__construct();
		$this->load->model('ComposicaoFamiliar_model', 'cfm');
		$this->load->model('Adolescente_model', 'am');
		$this->load->model("Endereco_model", "edm");
		$this->load->model('Documento_model', 'dm');
	}

	public function endereco($id)
	{

		$dados = array();
		$dados['end'] = $this->edm->GetById('idendereco', $id);
		$dados['ado'] = $this->am->GetById('idadolescente', $dados['end']['idadolescente']);
		$dados['doc'] = $this->dm->GetById('idadolescente', $dados['end']['idadolescente']);
		$dados['cf'] = $this->cfm->GetById('idendereco', $dados['end']['idendereco']);


		$this->blade->view('composicao_familiar/iuCF', $dados);
	}

	public function Ajax_Datatables()
	{
		$idendereco = (empty($this->input->post('idendereco'))) ? 0 : $this->input->post('idendereco');
		$listar = (empty($this->input->post('listar'))) ? 1 : 0;
		$where = array("idendereco" => $idendereco);
		$list = $this->cfm->Get_Datatables(null, $where);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
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
				$btns = "<button type='button' onclick='iuResidente($obj->idcf)' class='btn btn-warning btn-sm '> <i class='fa fa-pencil' aria-hidden='true'></i></button> ";
			}
			$btns .= " <button type='button' onclick='deletarRegistro(\"ComposicaoFamiliar\", " . $obj->idcf . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->cfm->count_all(null, $where),
			"recordsFiltered" => $this->cfm->count_filtered(null, $where),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function save()
	{
		parse_str($this->input->post('form'), $form);

		$form['idendereco'] = $this->input->post('idendereco');

		$form['nome'] = mb_strtoupper($form['nome'], 'UTF-8');

		$form['obs'] = $form['obsR'];
		unset($form['obsR']);

		$form['renda'] = str_replace(',', '.', str_replace('.', '', $form['renda']));

		if (empty($form['dt_nasc'])) {
			$form['dt_nasc'] = null;
		} else {
			$form['dt_nasc'] = date('Y-m-d', strtotime(str_replace("/", "-", $form['dt_nasc'])));
		}

		if (empty($form['idcf'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			echo $this->cfm->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->cfm->Update($form['idcf'], $form);
			echo $form['idcf'];
		}
	}

	public function alterar()
	{
		$id = $this->input->post('idcf');
		$dados = $this->cfm->GetById('idcf', $id);
		$dados['renda'] = number_format($dados['renda'], 2, ',', '.');
		$dados['dt_nasc'] = date('d/m/Y', strtotime($dados['dt_nasc']));
		echo json_encode($dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->cfm->DeleteLogico($id);
	}
}
