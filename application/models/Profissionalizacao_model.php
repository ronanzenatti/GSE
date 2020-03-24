<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profissionalizacao_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "profissionalizacao";
		$this->pk_name = 'id_profissionalizacao';
		$this->column_order = array('id_profissionalizacao', 'adolescente_id', 'registrado', 'interesses_cursos', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_profissionalizacao', 'adolescente_id', 'registrado', 'interesses_cursos', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_profissionalizacao');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
	}
}
