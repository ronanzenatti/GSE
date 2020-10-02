<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Adolescente_model', 'am');
		$this->load->model('Documento_model', 'dm');
		$this->load->model('Pia_model', 'pm');
		$this->load->model('Curso_model', 'cum');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}
	}

	public function save()
	{	
		$this->cum->table = "cursos";
		parse_str($this->input->post('form'), $form);

		$form['nome'] = mb_strtoupper($form['curso'], 'UTF-8');
		unset($form['curso']);
		$form['instituicao'] = mb_strtoupper($form['instituicao'], 'UTF-8');

		if (empty($form['id_curso'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			echo $this->cum->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->cum->Update($form['id_curso'], $form);
			echo $form['id_curso'];
		}
	}

	public function Ajax_Datatables()
	{
		$idA = $this->input->post('idA');
		$where = array("adolescente_id" => $idA);
		$list = $this->cum->Get_Datatables("c", $where);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->nome;
			$row[] = $obj->instituicao;
			$row[] = $obj->conclusao;

			$btns = "<button type='button' onclick='iuCurso($obj->id_curso)' class='btn btn-warning btn-sm '> <i class='fa fa-pencil' aria-hidden='true'></i></button> ";
			$btns .= " <button type='button' onclick='deletarRegistro(\"curso\", " . $obj->id_curso . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			
			$row[] = $btns;
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->cum->Count_All("c", $where),
			"recordsFiltered" => $this->cum->Count_Filtered("c", $where),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function alterar()
	{
		$idA = $this->input->post('idA');
		$idC = $this->input->post('idC');

		$dados = Array();
		$dados = $this->cum->GetById('id_curso', $idC);
		
		echo json_encode($dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->cum->DeleteLogico($id);
	}
}

