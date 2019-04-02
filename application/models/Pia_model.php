<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pia_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "pia p";
		$this->column_order = array('p.idpia', 'a.nome', 'd.RG', 'p.data_recepcao');
		//$this->column_order = array('idpia', 'idadolescente', 'data_recepcao', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('p.idpia', 'a.nome', 'd.RG', 'p.data_recepcao');
		$this->order = array('idpia');
		$this->dates = array('data_recepcao', 'created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'adolescentes a', 'juncao' => 'a.idadolescente = p.idadolescente', 'tipo' => 'INNER'],
			['tabela' => 'documentos d', 'juncao' => 'a.idadolescente = d.idadolescente', 'tipo' => 'LEFT']
		);
	}
}
