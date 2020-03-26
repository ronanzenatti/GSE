<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Endereco_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "enderecos";
		$this->column_order = array('id_endereco', 'descricao', 'logradouro', 'numero', 'bairro', 'cidade');
		$this->column_search = array('id_endereco', 'descricao', 'logradouro', 'numero', 'bairro', 'cidade');
		$this->order = array('id_endereco');
		$this->dates = array('dt_mudanca', 'created_at', 'updated_at', 'deleted_at');
		$this->pk_name = "id_endereco";
	}

	public function enderecosPorAdolescente($idAdolescente)
	{
		$this->db->select("COUNT(id_endereco) AS enderecos");
		$this->db->from($this->table);
		$this->db->where("adolescente_id", $idAdolescente);
		$this->db->where('dt_mudanca IS NULL ', null, false);
		$this->db->where('deleted_at IS NULL ', null, false);
		$query = $this->db->get();
		return $query->row_object();
	}
}
