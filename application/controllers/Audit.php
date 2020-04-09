<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audit extends CI_Controller
{
	private $campos = array();
	private $models = array(
		'adolescentes' => 'Adolescentes',
		'audit' => 'Auditoria',
		'beneficios_familias' => 'Beneficios Familiares',
		'cargos' => 'Cargos',
		'composicao_familiar' => 'Composição Familiar',
		'contatos' => 'Contatos',
		'cursos' => 'Cursos',
		'documentos' => 'Documentos',
		'encaminhamentos' => 'Encaminhamentos',
		'enderecos' => 'Endereços',
		'entidades' => 'Entidades',
		'funcionarios' => 'Funcionários',
		'grupos_familiares' => 'Grupos Familiares',
		'historico_logins' => 'Histórico de Logins',
		'horarios_familiar' => 'Horários Familiares',
		'internacoes' => 'Internações',
		'lazeres_culturas_esportes' => 'Lazer, Cultura e Esportes',
		'login_attempts' => 'Tentativas de Login',
		'metas' => 'Metas',
		'pia' => 'P.I.A.',
		'planejamentos_atendimentos' => 'Planejamento de Atendimentos',
		'planejamentos_futuros' => 'Planejamentos Futuros',
		'profissionalizacao' => 'Profissionalização',
		'saude' => 'Saude',
		'situacao_habitacional' => 'Situação Habitacional',
		'situacoes_escolares' => 'Situações Escolares',
		'trabalhos' => 'Trabalhos',
		'usuarios' => 'Usuários',
		'termos_compromissos' => 'Termos'
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
			'id_adolescente' => 'Código',
			'nome' => 'Nome',
			'nome_tratamento' => 'Tratamento',
			'dt_nasc' => 'Nascimento',
			'sexo' => 'Sexo',
			'estado_civil' => 'Estado Civil',
			'natural' => 'Natural',
			'responsavel' => 'Responsável',
			'obs' => 'Observações',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['beneficios_familias'] = array(
			'id_beneficio_familia' => 'Código',
			'grupo_familiar_id' => 'Grupo Familiar',
			'nome' => 'Nome',
			'valor' => 'Valor',
			'ativo' => 'Ativo',
			'motivo' => 'Motivo',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['cargos'] = array(
			'id_cargo' => 'Código',
			'nome' => 'Nome',
			'descricao' => 'Descrição',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['composicao_familiar'] = array(
			'id_cf' => 'Código',
			'grupo_familiar_id' => 'Grupo Familiar',
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
		$this->campos['contatos'] = array(
			'id_contato' => 'Código',
			'adolescente_id' => 'Adolescente ',
			'descricao' => 'Descrição',
			'tipo_cont' => 'Tipo do Contato',
			'contato' => 'Contato',
			'ativo' => 'ativo',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['cursos'] = array(
			'id_curso' => 'Código',
			'adolescente_id' => 'Adolescente',
			'nome' => 'Nome',
			'instituicao' => 'Instituição',
			'conclusao' => 'Conclusão',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['documentos'] = array(
			'id_documento' => 'Código',
			'adolescente_id' => 'Adolescente ',
			'cert_nasc' => 'Certidão de Nascimento',
			'cert_livro' => 'Livro da Certidão',
			'cert_folhas' => 'Folhas da Certidão',
			'cert_cartorio' => ' Cartório da Certidão',
			'bairro_cartorio' => 'Bairro do Cartório',
			'municipio_cartorio' => 'Cidade do Cartório',
			'cpf' => 'CPF',
			'rg' => 'RG',
			'rg_emissao' => 'Emissão do RG',
			'ctps' => 'CTPS',
			'ctps_serie' => 'Série da CTPS',
			'pis' => 'PIS',
			'titulo_eleitor' => 'Titulo de Eleitor',
			'te_secao' => 'Seção do Titulo',
			'te_zona' => 'Zona do Titulo',
			'cam' => 'CAM',
			'cdi_cr' => 'CDI / CR',
			'cartao_sus' => 'Cartão SUS',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['encaminhamentos'] = array(
			'id_encaminhamento' => 'Código',
			'pia_id' => 'PIA',
			'entidade_id' => 'Entidade',
			'parte_pia' => 'Parte do Pia',
			'descricao' => 'Descrição',
			'data_limite' => 'Data limite',
			'data_envio' => 'Data de envio',
			'usuario_id' => 'Usuario',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['enderecos'] = array(
			'id_endereco' => 'Código',
			'adolescente_id' => 'Adolescente ',
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
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['entidades'] = array(
			'id_entidade' => 'Código',
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
			'id_funcionario' => 'Código',
			'entidade_id' => 'Entidade',
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
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['grupos_familiares'] = array(
			'id_grupo_familiar' => 'Código',
			'adolescente_id' => 'Adolescente',
			'outras_infomacoes' => 'Outras informações',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['historico_logins'] = array(
			'id_hl' => 'Código',
			'usuario_id' => 'Usuário',
			'ip_address' => 'IP',
			'navegador' => 'Navegador',
			'so' => 'S.O.',
			'created_at' => 'Criado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['historico_familiar'] = array(
			'id_horario_familia' => 'Código',
			'adolescente_id' => 'Adolescente',
			'chega_tarde' => 'Chega tarde?',
			'compromissos' => 'Compromissos',
			'periodo_rua' => 'Período na rua',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['internacoes'] = array(
			'id_internacao' => 'Código',
			'adolescente_id' => 'Adolescente',
			'quando' => 'Quando',
			'onde' => 'Onde',
			'periodo' => 'Período',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['lazeres_culturas_esportes'] = array(
			'ld_lce' => 'Código',
			'adolescente_id' => 'Adolescente',
			'cultural_participa' => 'Cultura que participa',
			'cultural_interesse' => 'Cultura interesse',
			'esportiva_participa' => 'Esportes que participa',
			'esportiva_interesse' => 'Esportes interesse',
			'lazer' => 'Lazer',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['login_attempts'] = array(
			'id' => 'Código',
			'ip_address' => 'IP',
			'login' => 'Login',
			'time' => 'Time',
		);
		$this->campos['metas'] = array(
			'id_meta' => 'Código',
			'pia_id' => 'PIA',
			'parte_pia' => 'Parte do PIA',
			'descricao' => 'Descrição',
			'data_limite' => 'Data de limite',
			'usuario_id' => 'Usuário',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['pias'] = array(
			'id_pia' => 'Código',
			'adolescente_id' => 'Adolescente',
			'data_recepcao' => 'Data recepção',
			'data_inicio' => 'Data de inicio',
			'data_termino' => 'Data de termino',
			'numero_processo' => 'Nº Processo',
			'ato_infracional' => 'Ato infracional',
			'medida_aplicada' => 'Medida aplicada',
			'ass_juridico' => 'Assessor Juridico',
			'motivacao' => 'Motivação',
			'reflexao' => 'Reflexão',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['planejamentos_atendimentos'] = array(
			'id_planejamento_atendimento' => 'Código',
			'pia_id' => 'PIA',
			'tipo' => 'Tipo',
			'periodo' => 'Periodo',
			'data_inicio' => 'Data de inicio',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['planejamentos_futuros'] = array(
			'id_planejamento_futuro' => 'Código',
			'adolescente_id' => 'Adolescente',
			'interesse_familia' => 'Interesses',
			'influencia_negativa' => 'Influências negativas',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['profissionalizacao'] = array(
			'id_profissionalizacao' => 'Código',
			'adolescente_id' => 'Adolescente',
			'registrado' => 'Registrado',
			'interesses_cursos' => 'Interesses de cursos',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['saude'] = array(
			'id_saude' => 'Código',
			'adolescente_id' => 'Adolescente',
			'problemas_saude' => 'Problemas de Saude',
			'tratamentos' => 'Tratamentos',
			'psicologico_psiquiatrico' => 'Psicológico / Psiquiatrico',
			'cigarro_inicio' => 'Cigarro início',
			'cigarros_frequencia' => 'Cigarros frequência',
			'cigarros_quantidade' => 'Cigarros quantidade',
			'bebidas_inicio' => 'Bebidas início',
			'bebidas_frequencia' => 'Bebidas frequência',
			'bebidas_quantidade' => 'Bebidas quantidades',
			'drogas' => 'Drogas',
			'drogas_inicio' => 'Drogas início',
			'drogas_frequencia' => 'Drogas frequência',
			'drogas_quantidade' => 'Drogas quantidade',
			'medicamentos' => 'Medicamentos',
			'doenca_familia' => 'Doenças na familia',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['situacao_habitacional'] = array(
			'id_sh' => 'Código',
			'endereco_id' => 'Endereço',
			'tipo' => 'Tipo',
			'situacao' => 'Situacão',
			'valor' => 'Valor',
			'agua' => 'Agua',
			'esgoto' => 'Esgoto',
			'energia' => 'Energia',
			'pavimento' => 'Pavimentação',
			'coleta_lixo' => 'Coleta de Lixo',
			'qtde_comodos' => 'Quantidade de Comodos',
			'espaco' => 'Espaço',
			'qtde_pessoas' => 'Quantidade de Pessoas',
			'obs' => 'Observações',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['situacoes_escolares'] = array(
			'id_situacao_escolar' => 'Código',
			'adolescente_id' => 'Adolescente',
			'grau_escolaridade' => 'Grau de escolaridade',
			'estudando' => 'Estudando',
			'ano_abandono' => 'Ano de abandono',
			'ultima_escola' => 'Ultima escola',
			'retornar' => 'Retornar',
			'atestado_matricula' => 'Atestado de matricula',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['trabalhos'] = array(
			'id_trabalho' => 'Código',
			'adolescente_id' => 'Adolescente',
			'empresa' => 'Empresa',
			'salario' => 'Salário',
			'dt_inicio' => 'Data de inicio',
			'horario_inicio' => 'Horario de inicio',
			'horario_fim' => 'Horario de fim',
			'dt_recisao' => 'Data de recisão',
			'obs' => 'OBS',
			'motivo_recisao' => 'Motivo de revisão',
			'tipo' => 'Tipo',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
		$this->campos['usuarios'] = array(
			'id_usuario' => 'Código',
			'funcionario_id' => 'Funcionário',
			'cargo_id' => 'Cargo',
			'termo_id' => 'Termo',
			'ip_address' => 'IP',
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
		$this->campos['termos_compromissos'] = array(
			'id_termo' => 'Código',
			'nome' => 'Nome',
			'texto' => 'Descrição do Termo',
			'created_at' => 'Criado',
			'updated_at' => 'Atualizado',
			'deleted_at' => 'Deletado',
		);
	}

}
