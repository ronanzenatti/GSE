<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Encaminhamento_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "encaminhamentos";
		$this->pk_name = 'id_encaminhamento';
		$this->column_order = array('id_encaminhamento', 'pia_id', 'entidade_id', 'parte_pia', 'descricao', 'data_limite', 'data_envio', 'usuario_id', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_encaminhamento', 'pia_id', 'entidade_id', 'parte_pia', 'descricao', 'data_limite', 'data_envio', 'usuario_id', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_encaminhamento');
		$this->dates = array('data_limite', 'data_envio','created_at', 'updated_at', 'deleted_at');
	}
}