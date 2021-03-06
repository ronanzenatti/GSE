<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profissionalizacao_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "profissionalizacao pr";
		$this->pk_name ='pr.id_profissionalizacao';
		$this->column_order = array('pr.id_profissionalizacao','pr.adolescente_id','pr.registrado','pr.interesses_cursos','pr.created_at','pr.updated_at','pr.deleted_at');
		$this->column_search = array('pr.id_profissionalizacao','pr.adolescente_id','pr.registrado','pr.interesses_cursos','pr.created_at','pr.updated_at','pr.deleted_at');
		$this->order = array('id_profissionalizacao');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'adolescente a', 'juncao' => 'a.id_adolescente = pr.adolescente_id', 'tipo' => 'INNER']
		);
	}
}
