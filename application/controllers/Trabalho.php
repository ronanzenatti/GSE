<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabalho extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Adolescente_model', 'am');
		$this->load->model('Documento_model', 'dm');
		$this->load->model('Pia_model', 'pm');
		$this->load->model('Trabalho_model', 'tm');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}
	}

	public function save()
	{
		parse_str($this->input->post('form'), $form);

		$form['dt_inicio'] = (empty($form['dt_inicio'])) ? null : date("Y-m-d", strtotime(str_replace("/", "-", $form['dt_inicio'])));
		$form['dt_recisao'] = (empty($form['dt_recisao'])) ? null : date("Y-m-d", strtotime(str_replace("/", "-", $form['dt_recisao'])));
		$form['salario'] = (empty($form['salario'])) ? null : (str_replace(".", "", $form['salario']));

		$this->tm->table = "trabalhos";
		if (empty($form['id_trabalho'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			echo $this->tm->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->tm->Update($form['id_trabalho'], $form);
			echo $form['id_trabalho'];
		}
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

		$dados['tr'] = $this->tm->GetById('adolescente_id', $dados['obj']['adolescente_id']);
		
		$this->blade->view('trabalho/bodyPia', $dados);
	}

	public function Ajax_Datatables()
	{
		$idA = $this->input->post('idA');
		$where = array("adolescente_id" => $idA);
		$list = $this->tm->Get_Datatables('t', $where);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->empresa;
			$row[] = date('d/m/Y', strtotime($obj->dt_inicio));
			$row[] = date('d/m/Y', strtotime($obj->dt_recisao));
			$row[] = date('H:i', strtotime($obj->horario_inicio)) . " - " . date('H:i', strtotime($obj->horario_fim));
			
			$btns = "<button type='button' onclick='iuTrabalho($obj->id_trabalho)' class='btn btn-warning btn-sm '> <i class='fa fa-pencil' aria-hidden='true'></i></button> ";
			$btns .= " <button type='button' onclick='deletarRegistro(\"trabalho\", " . $obj->id_trabalho . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";

			$row[] = $btns;
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->tm->Count_All('t', $where),
			"recordsFiltered" => $this->tm->Count_Filtered('t', $where),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function alterar()  
	{	
		$idA = $this->input->post('idA');
		$idT = $this->input->post('idT');

		$dados = Array();
		$dados = $this->tm->GetById('id_trabalho', $idT);

		if (!empty($dados['dt_inicio'])) {
			$dados['dt_inicio'] = date("d/m/Y", strtotime($dados['dt_inicio']));
		}
		if (!empty($dados['dt_recisao'])) {
			$dados['dt_recisao'] = date("d/m/Y", strtotime($dados['dt_recisao']));
		}
		if (!empty($dados['salario'])) {
			$dados['salario'] = (str_replace(".", ",", $dados['salario']));
		}
		
		echo json_encode($dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->tm->DeleteLogico($id);
	}
	
}
