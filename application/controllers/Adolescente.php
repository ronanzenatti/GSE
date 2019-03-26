<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Knp\Snappy\Pdf;

class Adolescente extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Adolescente_model', 'am');
		$this->load->model('Documento_model', 'dm');
		$this->load->model("Contato_model", "com");
		$this->load->model("Endereco_model", "edm");
		$this->load->model('Entidade_model', 'em');
	}

	public function index()
	{
		$this->blade->view('adolescentes/listar');
	}


	public function inserir()
	{
		$this->blade->view('adolescentes/iuAdolescente');
	}

	public function save()
	{
		//'idadolescente', 'nome', 'dt_nasc', 'nome_tratamento', 'sexo', 'estado_civil', 'natural', 'responsavel', 'pai',
		//'pai_nasc', 'pai_natural', 'mae', 'mae_nasc', 'mae_natural', 'obs', 'created_at', 'updated_at', 'deleted_at'
		$this->am->table = "adolescentes";
		parse_str($this->input->post('form'), $form);
		$form['idadolescente'] = $this->input->post('idadolescente');
		$form['nome'] = mb_strtoupper($form['nome'], 'UTF-8');

		$form['dt_nasc'] = (empty($form['dt_nasc'])) ? null : date("Y-m-d", strtotime(str_replace("/", "-", $form['dt_nasc'])));

		if (empty($form['pai_nasc'])) {
			$form['pai_nasc'] = null;
		} else {
			$form['pai_nasc'] = date('Y-m-d H:i:s', strtotime(str_replace("/", "-", $form['pai_nasc'])));
		}
		if (empty($form['mae_nasc'])) {
			$form['mae_nasc'] = null;
		} else {
			$form['mae_nasc'] = date('Y-m-d H:i:s', strtotime(str_replace("/", "-", $form['mae_nasc'])));
		}

		if (empty($form['idadolescente'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			echo $this->am->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->am->Update('idadolescente', $form['idadolescente'], $form);
			echo $form['idadolescente'];
		}
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->am->GetById('idadolescente', $id);
		$dados['obj']['dt_nasc'] = (!empty($dados['obj']['dt_nasc'])) ? date("d/m/Y", strtotime($dados['obj']['dt_nasc'])) : null;
		$dados['obj']['pai_nasc'] = (!empty($dados['obj']['pai_nasc'])) ? date("d/m/Y", strtotime($dados['obj']['pai_nasc'])) : null;
		$dados['obj']['mae_nasc'] = (!empty($dados['obj']['mae_nasc'])) ? date("d/m/Y", strtotime($dados['obj']['mae_nasc'])) : null;
		$dados['objD'] = $this->dm->GetById('idadolescente', $id);
		$dados['objD']['RG_emissao'] = (!empty($dados['objD']['RG_emissao'])) ? date("d/m/Y", strtotime($dados['objD']['RG_emissao'])) : null;
		$this->blade->view('adolescentes/iuAdolescente', $dados);
	}

	public function deletar()
	{
		$id = $this->input->post('id');
		$adolescentes = Array();
		$adolescentes['deleted_at'] = date('Y-m-d H:i:s');
		return $this->am->Update('idadolescente', $id, $adolescentes);
	}

	public function Ajax_Datatables()
	{
		$list = $this->am->Get_Datatables('a');
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$contatos = $this->com->contatosPorAdolescente($obj->idadolescente);
			$end = $this->edm->enderecosPorAdolescente($obj->idadolescente);
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->idadolescente;
			$row[] = $obj->nome;
			$row[] = $obj->RG;
			$row[] = $obj->responsavel;
			$row[] = "<button type='button' onclick='showEnderecos($obj->idadolescente)' class='btn btn-default btn-sm'><span class='badge'>$end->enderecos</span></button>";
			$row[] = "<button type='button' onclick='showContatos($obj->idadolescente)' class='btn btn-default btn-sm'><span class='badge'>$contatos->contatos</span></button>";

			$btns = "<a href='" . base_url('adolescente/alterar/' . $obj->idadolescente) . "' class='btn btn-warning btn-sm'><i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"adolescente\", " . $obj->idadolescente . ", \"tableAdolescente\")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>  ";
			$btns .= "<a target='_blank' href='" . base_url('adolescente/gerar/' . $obj->idadolescente . '/' . $_SESSION['entidade_id']) . "' class='btn btn-primary btn-sm'><i class='fa fa-file-pdf-o' aria-hidden='true'></i></a> ";

			$row[] = $btns;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->am->Count_All('a'),
			"recordsFiltered" => $this->am->Count_Filtered('a'),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function gerarpdf($id, $ide)
	{
		//$snappy = new Pdf('C:\xampp\htdocs\GSE\vendor\wemersonjanuario\wkhtmltopdf-windows\bin\64bit\wkhtmltopdf.exe');
		$snappy = new Pdf('/home/etecibitinga1/public_html/gse/vendor/rvanlaak/wkhtmltopdf-amd64-centos7/bin/wkhtmltopdf-amd64');


		//header('Content-Type: application/pdf');
		//header('Content-Disposition: inline; filename="cadastro_completo_adolescente.pdf"');

		echo $snappy->getOutput('http://elo.etecibitinga.com:82/adolescente/verpdf/' . $id . '/' . $ide);
	}

	public function verpdf($id, $ide)
	{
		$dados = array();
		$dados['ado'] = $this->am->GetById('idadolescente', $id);
		$dados['doc'] = $this->dm->GetById('idadolescente', $id);
		$dados['ent'] = $this->em->GetById('identidade', $ide);
		$dados['conts'] = $this->com->GetAll($sort = 'ativo', $order = 'desc', $null = true, $where = 'idadolescente = ' . $id);
		$dados['ends'] = $this->edm->GetAll($sort = 'dt_mudanca', $order = 'asc', $null = true, $where = 'idadolescente = ' . $id);
		$this->blade->view('adolescentes/relatorios/cadastro_completo_table', $dados);
	}

	public function gerar($id, $ide)
	{
		$mpdf = new \Mpdf\Mpdf([
			'margin_top' => 10,
			'margin_left' => 20,
			'margin_right' => 10,
			'margin_bottom' => 10
		]);

		$dados = array();
		$dados['ado'] = $this->am->GetById('idadolescente', $id);
		$dados['doc'] = $this->dm->GetById('idadolescente', $id);
		$dados['ent'] = $this->em->GetById('identidade', $ide);
		$dados['conts'] = $this->com->GetAll($sort = 'ativo', $order = 'desc', $null = true, $where = 'idadolescente = ' . $id);
		$dados['ends'] = $this->edm->GetAll($sort = 'dt_mudanca', $order = 'asc', $null = true, $where = 'idadolescente = ' . $id);

		$html = $this->blade->render('adolescentes/relatorios/cadastro_completo_table', $dados);

		$mpdf->WriteHTML($html);
		$mpdf->Output(); // opens in browser
	}
}
