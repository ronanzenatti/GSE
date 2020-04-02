<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GrupoFamiliar extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('GrupoFamiliar_model', 'gfm');
		$this->load->model('Adolescente_model', 'am');
		$this->load->model('Documento_model', 'dm');
	}
	
	public function adolescente($id)
	{

		$dados = array();
		$dados['ado'] = $this->am->GetById('id_adolescente', $id);
		$dados['doc'] = $this->dm->GetById('adolescente_id', $id);
		$dados['cf'] = $this->gfm->GetById('grupo_familiar_id', $id);

		$this->blade->view('grupo_familiar/iuCF', $dados);
	}

	
	public function save($id)
	{
		$obj = Array();
		$dados = $this->gfm->GetById('adolescente_id', $id);
		
		if ($dados['adolescente_id'] == $id) {
			return redirect('ComposicaoFamiliar/adolescente/'. $id);
		} else {
			$obj['adolescente_id'] = $id;
			$obj['created_at'] = date('Y-m-d H:i:s');
			$obj['updated_at'] = date('Y-m-d H:i:s');
			$this->gfm->Insert($obj);

			return redirect('ComposicaoFamiliar/adolescente/'. $id);
		};
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->gfm->GetById('id_grupo_familiare', $id);
		$this->blade->view('grupo_familiar/iuGF', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		return $this->gfm->DeleteLogico($id);
	}


	public function Ajax_Datatables()
	{

		// $list = $this->cm->Get_Datatables();
		// $data = array();
		// $no = $_POST['start'];
		// foreach ($list as $obj) {
		// 	$no++;
		// 	$row = array();
		// 	//    $row[] = $no;
		// 	$row[] = $obj->id_cargo;
		// 	$row[] = $obj->nome;
		// 	$row[] = $obj->descricao;

		// 	$btns = "<a href='" . base_url('cargo/alterar/' . $obj->id_cargo) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
		// 	$btns .= "<button type='button' onclick='deletarRegistro(\"cargo\", " . $obj->id_cargo . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
		// 	$row[] = $btns;

		// 	$data[] = $row;
		// }

		// $output = array(
		// 	"draw" => $_POST['draw'],
		// 	"recordsTotal" => $this->cm->count_all(),
		// 	"recordsFiltered" => $this->cm->count_filtered(),
		// 	"data" => $data,
		// );
		// //output to json format
		// echo json_encode($output);
	}

	public function select2Json()
	{
		// $res = array();
		// $term = $this->input->post('term');
		// if (isset($term))
		// 	$where = "nome LIKE '%$term%'";
		// else
		// 	$where = null;

		// $all = $this->cm->GetAll('nome', 'asc', true, $where);
		// if (isset($all)) {
		// 	foreach ($all as $i) {
		// 		array_push($res, array("id" => (int)$i['id_cargo'], "text" => $i['nome']));
		// 	}
		// }

		// echo json_encode(array("results" => $res));
	}
}
