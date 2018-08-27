<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Funcionario_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "funcionarios as f";
		$this->column_order = array("f.idfuncionario", "f.nome", "e.nome AS entidade", "f.telefones");
		$this->column_search = array("f.idfuncionario", "f.nome", "e.nome AS entidade", "f.telefones");
		$this->order = array('idfuncionario');
		$this->dates = array('f.dt_nasc', 'f.created_at', 'f.updated_at', 'f.deleted_at');
		$this->joins = array(
			['tabela' => 'entidades e', 'juncao' => 'e.identidade = f.identidade', 'tipo' => 'INNER']
		);
		$this->select = "f.idfuncionario, f.nome, e.nome AS entidade, f.telefones";
	}
}
