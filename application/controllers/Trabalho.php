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
		$this->tm->table = "trabalhos";
		parse_str($this->input->post('form'), $form);
		
		$form['dt_inicio'] = (empty($form['dt_inicio'])) ? null : date("Y-m-d", strtotime(str_replace("/", "-", $form['dt_inicio'])));
		$form['dt_recisao'] = (empty($form['dt_recisao'])) ? null : date("Y-m-d", strtotime(str_replace("/", "-", $form['dt_recisao'])));
		$form['horario_inicio'] = (empty($form['horario_inicio'])) ? null : date("H:i", strtotime(str_replace("/", "-", $form['horario_inicio'])));
		$form['horario_fim'] = (empty($form['horario_fim'])) ? null : date("H:i", strtotime(str_replace("/", "-", $form['horario_fim'])));
		$form['salario'] = (empty($form['salario'])) ? null : (str_replace(".", "", $form['salario']));

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
			$row[] = (!empty($obj->dt_inicio)) ? date("d/m/Y", strtotime($obj->dt_inicio)) : null;
			$row[] = (!empty($obj->dt_recisao)) ? date("d/m/Y", strtotime($obj->dt_recisao)) : null;
			$row[] = ((!empty($obj->horario_inicio)) ? date("H:i", strtotime($obj->horario_inicio)) : "-- : --") . " - " . ((!empty($obj->horario_fim)) ? date("H:i", strtotime($obj->horario_fim)) : "-- : --");
			
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