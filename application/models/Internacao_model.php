<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Internacao_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "internacoes";
		$this->pk_name = 'id_internacao';
		$this->column_order = array('id_internacao', 'adolescente_id', 'quando', 'onde', 'periodo', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_internacao', 'adolescente_id', 'quando', 'onde', 'periodo', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_internacao');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
	}
}
