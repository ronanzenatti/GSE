<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Meta_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "metas m";
		$this->pk_name = 'm.id_meta';
		$this->column_order = array('m.id_meta','m.pia_id','m.parte_pia','m.descricao','m.data_limite','m.usuario_id','m.created_at','m.updated_at','m.deleted_at');
		$this->column_search = array('m.id_meta','m.pia_id','m.parte_pia','m.descricao','m.data_limite','m.usuario_id','m.created_at','m.updated_at','m.deleted_at');
		$this->order = array('id_meta');
		$this->dates = array('data_limite', 'created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'pias p', 'juncao' => 'p.id_pia = m.pia_id', 'tipo' => 'INNER']
		);
	}
}
