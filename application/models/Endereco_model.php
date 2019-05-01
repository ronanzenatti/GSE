<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Endereco_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "enderecos";
		$this->column_order = array('idendereco', 'descricao', 'logradouro', 'numero', 'bairro', 'cidade');
		$this->column_search = array('idendereco', 'descricao', 'logradouro', 'numero', 'bairro', 'cidade');
		$this->order = array('idendereco');
		$this->dates = array('dt_mudanca');
		$this->pk_name = "idendereco";
	}

	public function enderecosPorAdolescente($idAdolescente)
	{
		$this->db->select("COUNT(idendereco) AS enderecos");
		$this->db->from($this->table);
		$this->db->where("idadolescente", $idAdolescente);
		$this->db->where('dt_mudanca IS NULL ', null, false);
		$this->db->where('deleted_at IS NULL ', null, false);
		$query = $this->db->get();
		return $query->row_object();
	}
}
