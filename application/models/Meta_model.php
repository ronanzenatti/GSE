<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Meta_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "metas";
		$this->pk_name = 'id_meta';
		$this->column_order = array('id_meta', 'pia_id', 'parte_pia', 'descricao', 'data_limite', 'usuario_id', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_meta', 'pia_id', 'parte_pia', 'descricao', 'data_limite', 'usuario_id', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_meta');
		$this->dates = array('data_limite', 'created_at', 'updated_at', 'deleted_at');
	}
}
