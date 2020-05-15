<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TermoCompromisso extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
				$this->load->model('TermoCompromisso_model', 'tcm');
    }

    public function index()
    {
			if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
				header('Location: /principal');
			}
			$this->blade->view('termo_compromisso/listar');
    }	

    public function inserir()
    {
			if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
				header('Location: /principal');
			}
			$this->blade->view('termo_compromisso/iuTC');
    }

    public function save()
    {
			if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
				header('Location: /principal');
			}
			$obj = Array();
			$id = $this->input->post('id_termo');
			
			$obj['nome'] = mb_strtoupper($this->input->post('nome'), 'UTF-8');
			$obj['texto'] = $this->input->post('texto');
			
			var_dump($id);
			if (empty($id)) {
				$obj['created_at'] = date('Y-m-d H:i:s');
				$obj['updated_at'] = date('Y-m-d H:i:s');
				$this->tcm->Insert($obj);
			} else {
				$obj['updated_at'] = date('Y-m-d H:i:s');
				$this->tcm->Update($id, $obj);
			}
			redirect('TermoCompromisso/');
    }

    public function alterar($id)
    {
			if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
				header('Location: /principal');
			}
			$dados = Array();
			$dados['obj'] = $this->tcm->GetById('id_termo', $id);
			$this->blade->view('termo_compromisso/iuTC', $dados);
    }
		
    public function deletar()
    {
			if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
				header('Location: /principal');
			}
			$id = $this->input->post('id');
			return $this->tcm->DeleteLogico($id);
    }

    public function Ajax_Datatables()
    {
			$list = $this->tcm->Get_Datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $obj) {
				$no++;
				$row = array();
				//    $row[] = $no;
				$row[] = $obj->id_termo;
				$row[] = $obj->nome;
				$row[] = $obj->texto;
	
				$btns = "<a href='" . base_url('TermoCompromisso/visualizar/' . $obj->id_termo) . "' class='btn btn-info btn-sm'> <i class='fa fa-book' aria-hidden='true'></i></a> ";
				$btns .= "<a href='" . base_url('TermoCompromisso/alterar/' . $obj->id_termo) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
				$btns .= "<button type='button' onclick='deletarRegistro(\"TermoCompromisso\", " . $obj->id_termo . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
				$row[] = $btns;
	
				$data[] = $row;
			}
	
			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->tcm->count_all(),
				"recordsFiltered" => $this->tcm->count_filtered(),
				"data" => $data,
			);
			//output to json format
			echo json_encode($output);
		}

		public function visualizar($id)
		{
			$obj["termo"] = $this->tcm->GetById('id_termo', $id);
			$this->blade->view('termo_compromisso/visualizar', $obj);
		}

		public function select2Json()
		{
			$res = array();
			$term = $this->input->post('term');
			if (isset($term))
				$where = "nome LIKE '%$term%'";
			else
				$where = null;
	
			$all = $this->tcm->GetAll('nome', 'asc', true, $where);
			if (isset($all)) {
				foreach ($all as $i) {
					array_push($res, array("id" => (int)$i['id_termo'], "text" => $i['nome']));
				}
			}
	
			echo json_encode(array("results" => $res));
		}
	}
