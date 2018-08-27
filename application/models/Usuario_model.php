<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "usuarios u";
		$this->column_order = array('f.idfuncionario', 'f.nome', 'c.nome', 'u.email');
		$this->column_search = array('f.idfuncionario', 'f.nome', 'c.nome', 'u.email');
		$this->order = array('idfuncionario');
		$this->dates = array('data_termo', 'created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'funcionarios f', 'juncao' => 'f.idfuncionario = u.idfuncionario', 'tipo' => 'INNER'],
			['tabela' => 'cargos c', 'juncao' => 'c.idcargo = u.idcargo', 'tipo' => 'INNER'],
		);
		$this->select = "f.idfuncionario, f.nome, c.nome AS cargo, u.email";
	}

	public function GetByFuncionario($idfuncionario)
	{
		if (is_null($idfuncionario))
			return false;
		$this->db->where('u.ifuncionario', $idfuncionario);
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return null;
		}
	}

}
