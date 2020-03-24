<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PlanejamentoAtendimento_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "planejamentos_atendimentos";
		$this->pk_name = 'id_planejamento_atendimento';
		$this->column_order = array('id_planejamento_atendimento', 'pia_id', 'tipo', 'periodo', 'data_inicio', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_planejamento_atendimento', 'pia_id', 'tipo', 'periodo', 'data_inicio', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_planejamento_atendimento');
		$this->dates = array('data_inicio', 'created_at', 'updated_at', 'deleted_at');
	}
}
