<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Funcionario_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "funcionarios as f";
		$this->column_order = array("f.id_funcionario", "f.nome", "e.nome AS entidade", "f.telefones");
		$this->column_search = array("f.id_funcionario", "f.nome", "e.nome AS entidade", "f.telefones");
		$this->order = array('id_funcionario');
		$this->dates = array('f.dt_nasc', 'f.created_at', 'f.updated_at', 'f.deleted_at');
		$this->joins = array(
			['tabela' => 'entidades e', 'juncao' => 'e.id_entidade = f.entidade_id', 'tipo' => 'INNER']
		);
		$this->select = "f.id_funcionario, f.nome, e.nome AS entidade, f.telefones";
		$this->pk_name = 'id_funcionario';
	}
}
