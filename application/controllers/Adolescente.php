<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//use Knp\Snappy\Pdf;

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
		$this->am->table = "adolescentes";
		parse_str($this->input->post('form'), $form);
		$form['id_adolescente'] = $this->input->post('id_adolescente');
		$form['nome'] = mb_strtoupper($form['nome'], 'UTF-8');
		$form['dt_nasc'] = (empty($form['dt_nasc'])) ? null : date("Y-m-d", strtotime(str_replace("/", "-", $form['dt_nasc'])));

		if (empty($form['id_adolescente'])) {
			$form['created_at'] = date('Y-m-d H:i:s');
			$form['updated_at'] = date('Y-m-d H:i:s');
			echo $this->am->Insert($form);
		} else {
			$form['updated_at'] = date('Y-m-d H:i:s');
			$this->am->Update($form['id_adolescente'], $form);
			echo $form['id_adolescente'];
		}
	}

	public function alterar($id)
	{
		$dados = Array();
		$dados['obj'] = $this->am->GetById('id_adolescente', $id);
		$dados['obj']['dt_nasc'] = (!empty($dados['obj']['dt_nasc'])) ? date("d/m/Y", strtotime($dados['obj']['dt_nasc'])) : null;
		$dados['objD'] = $this->dm->GetById('adolescente_id', $id);
		$dados['objD']['rg_emissao'] = (!empty($dados['objD']['rg_emissao'])) ? date("d/m/Y", strtotime($dados['objD']['rg_emissao'])) : null;
		$this->blade->view('adolescentes/iuAdolescente', $dados);
	}

	public function deletar()
	{
		$this->am->table = "adolescentes";
		$id = $this->input->post('id');
		return $this->am->DeleteLogico($id);
	}

	public function Ajax_Datatables()
	{
		$list = $this->am->Get_Datatables('a');
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$contatos = $this->com->contatosPorAdolescente($obj->id_adolescente);
			$end = $this->edm->enderecosPorAdolescente($obj->id_adolescente);
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->id_adolescente;
			$row[] = $obj->nome;
			$row[] = $obj->rg;
			$row[] = $obj->responsavel;
			$row[] = "<button type='button' onclick='showEnderecos($obj->id_adolescente)' class='btn btn-default btn-sm'><span class='badge'>$end->enderecos</span></button>";
			$row[] = "<button type='button' onclick='showContatos($obj->id_adolescente)' class='btn btn-default btn-sm'><span class='badge'>$contatos->contatos</span></button>";

			$btns = "<a href='" . base_url('adolescente/alterar/' . $obj->id_adolescente) . "' class='btn btn-warning btn-sm'><i class='fa fa-pencil' aria-hidden='true'></i></a> ";
			$btns .= "<button type='button' onclick='deletarRegistro(\"adolescente\", " . $obj->id_adolescente . ", \"tableAdolescente\")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>  ";
			$btns .= "<a href='" . base_url('ComposicaoFamiliar/adolescente/' . $obj->id_adolescente) . "' class='btn btn-info btn-sm' class='btn btn-info btn-sm' data-toggle='tooltip' data-placement='top' title='Composição Familiar' data-original-title='Composição Familiar'><i class='fa fa-users' aria-hidden='true'></i></a> ";
			$btns .= "<a target='_blank' href='" . base_url('adolescente/gerar/' . $obj->id_adolescente . '/' . $_SESSION['entidade_id']) . "' class='btn btn-primary btn-sm'><i class='fa fa-file-pdf-o' aria-hidden='true'></i></a> ";

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
		$dados['ado'] = $this->am->GetById('id_adolescente', $id);
		$dados['doc'] = $this->dm->GetById('adolescente_ids', $id);
		$dados['ent'] = $this->em->GetById('id_entidade', $ide);
		$dados['conts'] = $this->com->GetAll($sort = 'ativo', $order = 'desc', $null = true, $where = 'adolescente_id = ' . $id);
		$dados['ends'] = $this->edm->GetAll($sort = 'dt_mudanca', $order = 'asc', $null = true, $where = 'id_adolescente_id = ' . $id);
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
		$dados['ado'] = $this->am->GetById('id_adolescente', $id);
		$dados['doc'] = $this->dm->GetById('adolescente_id', $id);
		$dados['ent'] = $this->em->GetById('id_entidade', $ide);
		$dados['conts'] = $this->com->GetAll($sort = 'ativo', $order = 'desc', $null = true, $where = 'adolescente_id = ' . $id);
		$dados['ends'] = $this->edm->GetAll($sort = 'dt_mudanca', $order = 'asc', $null = true, $where = 'adolescente_id = ' . $id);

		$html = $this->blade->render('adolescentes/relatorios/cadastro_completo_table', $dados);

		$mpdf->WriteHTML($html);
		$mpdf->Output(); // opens in browser
	}

	public function select2Json()
	{
		$res = array();

		$this->am->select = "a.id_adolescente AS id, a.nome, d.RG, d.CPF, a.responsavel, ";
		$this->am->select .= "DATE_FORMAT(a.dt_nasc, '%d/%m/%Y') AS dt_nasc, ";
		$this->am->select .= "TIMESTAMPDIFF(YEAR,a.dt_nasc, CURDATE()) AS idade, a.responsavel";

		$term = $this->input->post('term');
		if (isset($term))
			$where = "nome LIKE '%$term%'";
		else
			$where = null;

		$all = $this->am->GetAll('nome', 'asc', true, $where, 'a');

		echo json_encode(array("results" => $all));
	}
}
