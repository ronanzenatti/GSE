<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SituacaoEscolar_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "situacoes_escolares";
		$this->pk_name ='id_situacao_escolar';
		$this->column_order = array('se.id_situacao_escolar','se.adolescente_id','se.grau_escolaridade','se.estudando','se.ano_abandono','se.ultima_escola','se.retornar','se.atestado_matricula','se.created_at','se.updated_at','se.deleted_at');
		// $this->column_search = array('se.id_situacao_escolar','se.adolescente_id','se.grau_escolaridade','se.estudando','se.ano_abandono','se.ultima_escola','se.retornar','se.atestado_matricula','se.created_at','se.updated_at','se.deleted_at');
		$this->order = array('id_situacao_escolar');
		$this->dates = array('ano_abandono', 'atestado_matricula', 'created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'adolescente a', 'juncao' => 'a.id_adolescente = se.adolescente_id', 'tipo' => 'INNER']
		);
	}
} 