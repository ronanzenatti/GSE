<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Documento_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "documentos";
		$this->column_order = array('adolescente_id', 'nome', 'dt_nasc', 'nome_tratamento', 'sexo', 'estado_civil', 'natural', 'responsavel', 'pai', 'pai_nasc', 'pai_natural', 'mae', 'mae_nasc', 'mae_natural', 'obs', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('adolescente_id', 'nome', 'dt_nasc', 'nome_tratamento', 'sexo', 'estado_civil', 'natural', 'responsavel', 'pai', 'pai_nasc', 'pai_natural', 'mae', 'mae_nasc', 'mae_natural', 'obs', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_documento');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->pk_name = 'id_documento';
	}
}
