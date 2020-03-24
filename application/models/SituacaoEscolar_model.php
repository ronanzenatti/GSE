<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SituacaoEscolar_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "situacoes_escolares";
		$this->pk_name = 'id_situacao_escolar';
		$this->column_order = array('id_situacao_escolar', 'adolescente_id', 'grau_escolaridade', 'estudando', 'ano_abandono', 'ultima_escola', 'retornar', 'atestado_matricula', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_situacao_escolar', 'adolescente_id', 'grau_escolaridade', 'estudando', 'ano_abandono', 'ultima_escola', 'retornar', 'atestado_matricula', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_situacao_escolar');
		$this->dates = array('ano_abandono', 'atestado_matricula', 'created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => '', 'juncao' => ' = ', 'tipo' => '']
		);
	}
}