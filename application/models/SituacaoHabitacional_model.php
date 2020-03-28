<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SituacaoHabitacional_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "situacao_habitacional sh";
		$this->column_order = array('sh.id_sh','sh.tipo','sh.situacao','sh.valor','sh.agua','sh.esgoto','sh.energia','sh.pavimento','sh.coleta_lixo','sh.qtde_comodos','sh.espaco','sh.qtde_pessoas','sh.endereco_id','sh.obs','sh.created_at','sh.updated_at','sh.deleted_at');
		$this->column_search = array('id_sh','sh.tipo','sh.situacao','sh.valor','sh.agua','sh.esgoto','sh.energia','sh.pavimento','sh.coleta_lixo','sh.qtde_comodos','sh.espaco','sh.qtde_pessoas','sh.endereco_id','sh.obs','sh.created_at','sh.updated_at','sh.deleted_at');
		$this->order = array('id_sh');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->pk_name = 'id_sh';
		$this->joins = array(
			['tabela' => 'endereco e', 'juncao' => 'e.id_endereco = sh.endereco_id', 'tipo' => 'INNER']
		);
	}
}
