<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Audit_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "audit as au";
		$this->column_order = array('au.tipo', 'au.created_at', 'f.nome', 'au.model', 'au.model_id', 'au.antes', 'au.depois');
		$this->column_search = array('tipo', 'created_at', 'nome', 'model', 'model_id', 'antes', 'depois');
		$this->order = array('id');
		$this->dates = array('created_at');
		$this->chars = array('tipo');

		$this->joins = array(
			['tabela' => 'usuarios u', 'juncao' => 'u.id_usuario = au.user_id', 'tipo' => 'INNER'],
			['tabela' => 'funcionarios f', 'juncao' => 'f.id_funcionario = u.funcionario_id', 'tipo' => 'INNER']
		);
	}
}
