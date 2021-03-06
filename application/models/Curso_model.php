<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Curso_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "cursos c";
		$this->pk_name = 'id_curso';
		$this->column_order = array('id_curso', 'adolescente_id', 'adolescente_id', 'nome', 'instituicao', 'conclusao', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_curso', 'adolescente_id', 'adolescente_id', 'nome', 'instituicao', 'conclusao', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_curso');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'adolescentes a', 'juncao' => 'a.id_adolescente = c.adolescente_id', 'tipo' => 'INNER'],
		);
	}

	// public function cursosPorAdolescente($idAdolescente)
	// {
	// 	$this->db->select("COUNT(id_curso) AS cursos");
	// 	$this->db->from($this->table);
	// 	$this->db->where("adolescente_id", $idAdolescente);
	// 	$this->db->where('deleted_at IS NULL ', null, false);
	// 	$query = $this->db->get();
	// 	return $query->row_object();
	// }
}
