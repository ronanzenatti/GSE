<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class BeneficioFamilia_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "beneficios_familias";
		$this->pk_name = 'id_beneficio_familia';
		$this->column_order = array('id_beneficio_familia', 'grupo_familiar_id', 'nome', 'valor', 'ativo', 'motivo', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_beneficio_familia', 'grupo_familiar_id', 'nome', 'valor', 'ativo', 'motivo', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_beneficio_familia');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
	}
}
