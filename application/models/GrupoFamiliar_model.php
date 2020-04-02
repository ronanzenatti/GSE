<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class GrupoFamiliar_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "grupos_familiares";
		$this->column_order = array('id_grupo_familiar', 'adolescente_id', 'outras_infomacoes', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_grupo_familiar', 'adolescente_id', 'outras_infomacoes', 'created_at', 'updated_at', 'deleted_at');
		$this->select = array('id_grupo_familiar', 'adolescente_id', 'outras_infomacoes', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_grupo_familiar');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->pk_name = 'id_grupo_familiar';
	}
}
