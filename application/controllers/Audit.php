<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audit extends CI_Controller
{
	private $campos = array();
	private $models = array(
		'adolescentes' => 'Adolescentes',
		'audit' => 'Auditoria',
		'cargos' => 'Cargos',
		'composicao_familiar' => 'Composição Familiar',
		'contatos' => 'Contatos',
		'documentos' => 'Documentos',
		'enderecos' => 'Endereços',
		'entidades' => 'Entidades',
		'funcionarios' => 'Funcionários',
		'pia' => 'P.I.A.',
		'situacao_habitacional' => 'Situação Habitacional',
		'trabalhos' => 'Trabalhos',
		'usuarios' => 'Usuários'
	);

	function __construct()
	{
		parent::__construct();
		$this->load->model('Funcionario_model', 'fm');
		$this->load->model('Usuario_model', 'um');
		$this->load->model('Cargo_model', 'cm');
		$this->load->model('Entidade_model', 'em');
		$this->load->model('Audit_model', 'aum');

		$this->montaCampos();
	}

	public function index()
	{
		$this->blade->view('audits/auditoria');
	}

	public function Ajax_Datatables()
	{
		$where = null;
		if ($this->input->post('form')) {
			parse_str($this->input->post('form'), $form);

			$where['model'] = $form['model'];

			if ($form['tipo'] != 'T') {
				$where['tipo'] = $form['tipo'];
			}
			if (!empty($form['model_id'])) {
				$where['model_id'] = $form['model_id'];
			}
			if (!empty($form['contenha'])) {
				$contenha = $form['contenha'];
				$this->db->where("(antes LIKE '%$contenha%' OR depois LIKE '%$contenha%')", null, false);
			}
		}
		$list = $this->aum->Get_Datatables(null, $where);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//$row[] = ($obj->tipo == "C") ? 'Novo' : ($obj->tipo == 'U') ? 'Alterado' : ($obj->tipo == 'D') ? 'Deletado' : 'NULL';
			$row[] = ($obj->tipo == 'C' ? 'Novo' : ($obj->tipo == 'U' ? 'Alterado' : ($obj->tipo == 'D' ? 'Deletado' : 'NULL')));
			$row[] = date('d/m/Y H:i:s', strtotime($obj->created_at));
			$row[] = $obj->user_id;
			$row[] = $this->models[$obj->model];
			$row[] = $obj->model_id;
			$row[] = $this->montaLog($obj->antes, $obj->model);
			$row[] = $this->montaLog($obj->depois, $obj->model);
			$row[] = $obj->ip;

			$data[] = $row;
		}


		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->aum->count_all(),
			"recordsFiltered" => $this->aum->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	private function montaLog($data, $model)
	{
		$log = "";
		if (!empty($data)) {
			$dec = json_decode($data);
			foreach ($dec as $k => $d) {
				$log .= '<strong>' . $this->campos[$model][$k] . "</strong>: " . $d . "<br/>";
			}
		}
		return $log;
	}

	private function montaCampos()
	{
		$this->campos['adolescentes'] = array(
			'idadolescente' => 'Código',
			'nome' => 'Nome',
			'dt_nasc' => 'Nascimento',
			'sexo' => 'Sexo',
			'estado_civil' => 'Estado Civil',
			'natural' => 'Natural',
			'responsavel' => 'Responsável',
			'pai' => 'Pai',
			'pai_nasc' => 'Nascimento do Pai',
			'pai_natural' => 'Natural do Pai',
			'mae' => 'Mãe',
			'mae_nasc' => 'Nascimento da Mãe',
			'mae_natural' => 'Natural da Mãe',
			'obs' => 'Observações',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['cargos'] = array(
			'idcargo' => 'Código',
			'nome' => 'Nome',
			'descricao' => 'Descrição',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['contatos'] = array(
			'idcontato' => 'Código',
			'descricao' => 'Descrição',
			'tipo_cont' => 'Tipo do Contato',
			'contato' => 'Contato',
			'ativo' => 'ativo',
			'idadolescente' => 'Adolescente ',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['documentos'] = array(
			'iddocumento' => 'Código',
			'cert_nasc' => 'Certidão de Nascimento',
			'cert_livro' => 'Livro da Certidão',
			'cert_folhas' => 'Folhas da Certidão',
			'cert_cartorio' => ' Cartório da Certidão',
			'bairro_cartorio' => 'Bairro do Cartório',
			'municipio_cartorio' => 'Cidade do Cartório',
			'RG' => 'RG',
			'RG_emissao' => 'Emissão do RG',
			'CTPS' => 'CTPS',
			'CTPS_serie' => 'Série da CTPS',
			'CPF' => 'CPF',
			'titulo_eleitor' => 'Titulo de Eleitor',
			'te_secao' => 'Seção do Titulo',
			'te_zona' => 'Zona do Titulo',
			'CAM' => 'CAM',
			'CDI_CR' => 'CDI / CR',
			'providenciar' => 'Providenciar',
			'idadolescente' => 'Adolescente ',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['enderecos'] = array(
			'idendereco' => 'Código',
			'descricao' => 'Descrição',
			'logradouro' => 'Logradouro',
			'numero' => 'Número',
			'complemento' => 'Complemento',
			'bairro' => 'Bairro',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
			'cep' => 'CEP',
			'referencia' => 'Referência',
			'dt_mudanca' => 'Data de Mudança',
			'motivo' => 'Motivo',
			'idadolescente' => 'Adolescente ',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['entidades'] = array(
			'identidade' => 'Código',
			'nome' => 'Nome',
			'cnpj' => 'CNPJ',
			'tipo' => 'Tipo',
			'logradouro' => 'Logradouro',
			'numero' => 'Número',
			'bairro' => 'Bairro',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
			'cep' => 'CEP',
			'telefones' => 'Telefones',
			'email' => 'E-mail',
			'responsavel' => 'Responsável',
			'resp_tel' => 'Telefone do Responsável',
			'resp_email' => 'E-mail do Responsável',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['funcionarios'] = array(
			'idfuncionario' => 'Código',
			'nome' => 'Nome',
			'dt_nasc' => 'Nascimento',
			'sexo' => 'Sexo',
			'cpf' => 'CPF',
			'rg' => 'RG',
			'registro' => 'Registro',
			'logradouro' => 'Logradouro',
			'numero' => 'Número',
			'bairro' => 'Bairro',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
			'cep' => 'CEP',
			'telefones' => 'Telefones',
			'obs' => 'Observações',
			'identidade' => 'Entidade',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['composicao_familiar'] = array(
			'idcf' => 'Código',
			'idendereco' => 'Endereco',
			'nome' => 'Nome',
			'parentesco' => 'Parentesco',
			'dt_nasc' => 'Nascimento',
			'sexo' => 'Sexo',
			'escolaridade' => 'Escolaridade',
			'formacao_profissional' => 'Formação Profissional',
			'ocupacao' => 'Ocupação',
			'renda' => 'Renda',
			'telefones' => 'Telefones',
			'obs' => 'Observações',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['situacao_habitacional'] = array(
			'idsh' => 'Código',
			'tipo' => 'Tipo',
			'situacao' => 'Situacão',
			'valor' => 'Valor',
			'agua' => 'Agua',
			'Esgoto' => 'Esgoto',
			'energia' => 'Energia',
			'pavimento' => 'Pavimentação',
			'coleta_lixo' => 'Coleta de Lixo',
			'qtde_comodos' => 'Quantidade de Comodos',
			'espaco' => 'Espaço',
			'qtde_pessoas' => 'Quantidade de Pessoas',
			'idendereco' => 'Endereço',
			'obs' => 'Observações',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['usuarios'] = array(
			'idusuario' => 'Código',
			'ip_address' => 'IP',
			'idfuncionario' => 'Funcionário',
			'idcargo' => 'Cargo',
			'salt' => 'Salt',
			'email' => 'E-mail',
			'password' => 'Senha',
			'username' => 'Usuário',
			'activation_code' => 'Código de Ativação',
			'forgotten_password_code' => 'Código de Senha',
			'forgotten_password_time' => 'Tempo da Senha',
			'remember_code' => 'Código de Recuperação',
			'last_login' => 'Último Login',
			'active' => 'Ativo',
			'termo' => 'Termo',
			'data_termo' => 'Data do Termo',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
	}

}
