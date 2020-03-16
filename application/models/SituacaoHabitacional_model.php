<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SituacaoHabitacional_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "situacao_habitacional";
		$this->column_order = array('id_sh', 'tipo', 'situacao', 'valor', 'agua', 'esgoto', 'energia', 'pavimento', 'coleta_lixo', 'qtde_comodos', 'espaco', 'qtde_pessoas', 'endereco_id', 'obs', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_sh', 'tipo', 'situacao', 'valor', 'agua', 'esgoto', 'energia', 'pavimento', 'coleta_lixo', 'qtde_comodos', 'espaco', 'qtde_pessoas', 'endereco_id', 'obs', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_sh');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->pk_name = 'id_sh';
	}
}
