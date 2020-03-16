<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "usuarios u";
		$this->column_order = array('f.id_funcionario', 'f.nome', 'c.nome', 'u.email');
		$this->column_search = array('f.id_funcionario', 'f.nome', 'c.nome', 'u.email');
		$this->order = array('f.id_funcionario');
		$this->dates = array('data_termo', 'created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'funcionarios f', 'juncao' => 'f.id_funcionario = u.funcionario_id', 'tipo' => 'INNER'],
			['tabela' => 'cargos c', 'juncao' => 'c.id_cargo = u.cargo_id', 'tipo' => 'INNER'],
		);
		$this->select = "f.id_funcionario, f.nome, c.nome AS cargo, u.email";
		$this->pk_name = 'id_usuario';
	}

	public function GetByFuncionario($idfuncionario)
	{
		if (is_null($idfuncionario))
			return false;
		$this->db->where('u.funcionario_id', $idfuncionario);
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return null;
		}
	}

}
