<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Encaminhamento_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "encaminhamentos e";
		$this->pk_name = 'e.id_encaminhamento';
		$this->column_order = array('e.id_encaminhamento','e.pia_id','e.entidade_id','e.parte_pia','e.descricao','e.data_limite','e.data_envio','e.usuario_id','e.created_at','e.updated_at','e.deleted_at');
		$this->column_search = array('e.id_encaminhamento','e.pia_id','e.entidade_id','e.parte_pia','e.descricao','e.data_limite','e.data_envio','e.usuario_id','e.created_at','e.updated_at','e.deleted_at');
		$this->order = array('id_encaminhamento');
		$this->dates = array('data_limite', 'data_envio','created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'entidade ent', 'juncao' => 'ent.id_entidade = e.entidade_id', 'tipo' => 'INNER']
			['tabela' => 'pias p', 'juncao' => 'pias.id_pia = e.pia_id', 'tipo' => 'INNER']
		);
	}
}