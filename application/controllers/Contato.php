<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Contato_model', 'com');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}
	}

	public function index()
	{
		$this->blade->view('contatos/listar');
	}


	public function save()
	{
		parse_str($this->input->post('form'), $form);
		$form['adolescente_id'] = $this->input->post('id_adolescente');

		$form['ativo'] = isset($form['ativoC']) ? 1 : 0;

		$form['descricao'] = $form['descricaoC'];
		unset($form['descricaoC']);
		unset($form['ativoC']);

		if (empty($form['id_contato'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			echo $this->com->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->com->Update($form['id_contato'], $form);
			echo $form['id_contato'];
		}
	}

	public function alterar()
	{
		$idA = $this->input->post('id_adolescente');
		$idC = $this->input->post('idC');

		$dados = $this->com->GetById('id_contato', $idC);

		echo json_encode($dados);
	}

	public function show()
	{
		$idPessoa = $this->input->post('idpessoa');

		$dados = Array();
		$dados['obj'] = $this->pm->GetById('idpessoa', $idPessoa);
		$this->blade->view('usuarios/modals/showContato', $dados);
	}

	public function Ajax_Datatables()
	{
		$idpessoa = $this->input->post('id_adolescente');
		$listar = (empty($this->input->post('listar'))) ? 1 : 0;
		$where = array("adolescente_id" => $idpessoa);
		$list = $this->com->Get_Datatables(null, $where);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->descricao;
			$row[] = $this->tipo[$obj->tipo_cont];
			$row[] = $obj->contato;
			$row[] = ($obj->ativo) ? "<strong class='text-success'>SIM</strong>" : "<strong class='text-danger'>NÃO</strong>";
			$btns = "";
			if ($listar) {
				$btns = "<button type='button' onclick='iuContato($obj->id_contato)' class='btn btn-warning btn-sm '> <i class='fa fa-pencil' aria-hidden='true'></i></button> ";
			}

			$btns .= " <button type='button' onclick='deletarRegistro(\"contato\", " . $obj->id_contato . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->com->count_all(null, $where),
			"recordsFiltered" => $this->com->count_filtered(null, $where),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->com->DeleteLogico($id);
	}

	public $tipo = array(
		"C" => "Celular",
		"F" => "Fixo",
		"E" => "E-mail",
		"O" => "Outros",
	);
}
