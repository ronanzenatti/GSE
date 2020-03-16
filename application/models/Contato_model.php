<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contato_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "contatos";
		$this->column_order = array('id_contato', 'descricao', 'tipo_cont', 'contato');
		$this->column_search = array('id_contato', 'descricao', 'tipo_cont', 'contato');
		$this->order = array('id_contato');
		$this->pk_name = 'id_contato';
	}

	public function contatosPorAdolescente($idAdolescente)
	{
		$this->db->select("COUNT(id_contato) AS contatos");
		$this->db->from($this->table);
		$this->db->where("adolescente_id", $idAdolescente);
		$this->db->where("ativo", 1);
		$this->db->where('deleted_at IS NULL ', null, false);
		$query = $this->db->get();
		return $query->row_object();
	}
}
