<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Internacao_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "internacoes i";
		$this->pk_name = 'i.id_internacao';
		$this->column_order = array('i.id_internacao','i.adolescente_id','i.quando','i.onde','i.periodo','i.created_at','i.updated_at','i.deleted_at');
		$this->column_search = array('i.id_internacao','i.adolescente_id','i.quando','i.onde','i.periodo','i.created_at','i.updated_at','i.deleted_at');
		$this->order = array('id_internacao');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'adolescente a', 'juncao' => 'a.id_adolescente = i.adolescente_id', 'tipo' => 'INNER']
		);
	}
}
