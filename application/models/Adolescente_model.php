<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Adolescente_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "adolescentes a";
		$this->pk_name = 'id_adolescente';
		$this->column_order = array('a.id_adolescente', 'a.nome', 'd.rg', 'a.responsavel');
		//$this->column_order = array('id_adolescente', 'nome', 'dt_nasc', 'nome_tratamento', 'sexo', 'estado_civil', 'natural', 'responsavel', 'pai', 'pai_nasc', 'pai_natural', 'mae', 'mae_nasc', 'mae_natural', 'obs', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('a.id_adolescente', 'a.nome', 'd.rg', 'a.responsavel');
		$this->order = array('id_adolescente');
		$this->dates = array('dt_nasc', 'created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'documentos d', 'juncao' => 'a.id_adolescente = d.adolescente_id', 'tipo' => 'LEFT']
		);
	}
}
