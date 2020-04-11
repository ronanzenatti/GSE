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
}
