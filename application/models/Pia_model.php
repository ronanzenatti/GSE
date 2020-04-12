<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pia_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "pias p";
		$this->column_order = array('p.id_pia', 'a.id_adolescente', 'a.nome', 'd.rg', 'p.data_recepcao');
		//$this->column_order = array('idpia', 'idadolescente', 'data_recepcao', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('p.id_pia', 'a.id_adolescente', 'a.nome', 'd.rg', 'p.data_recepcao');
		$this->order = array('id_pia');
		$this->dates = array('data_recepcao', 'created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'adolescentes a', 'juncao' => 'a.id_adolescente = p.adolescente_id', 'tipo' => 'INNER'],
			['tabela' => 'documentos d', 'juncao' => 'a.id_adolescente = d.adolescente_id', 'tipo' => 'LEFT']
		);
	}

	public function getTotalProcessos($idAdolescente)
	{
		$this->db->select("COUNT(p.id_pia) AS qtdeProcessos, CASE WHEN p.medida_aplicada = 1 THEN 'L.A.' WHEN p.medida_aplicada = 2 THEN 'P.S.C.' WHEN p.medida_aplicada IS NULL THEN 'N/A' ELSE 'L.A. e P.S.C.' END AS medida");
		$this->db->from($this->table);
		$this->db->where("p.adolescente_id", $idAdolescente);
		$this->db->where('p.deleted_at IS NULL ', null, false);
		$this->db->group_by('p.medida_aplicada ');
		$query = $this->db->get();
//		echo "<pre>";
//        print_r($this->db->last_query());
//        exit();
		return $query->result();
	}
}
