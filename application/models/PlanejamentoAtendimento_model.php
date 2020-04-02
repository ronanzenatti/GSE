<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PlanejamentoAtendimento_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "planejamentos_atendimentos pa";
		$this->pk_name = 'pa.id_planejamento_atendimento';
		$this->column_order = array('pa.id_planejamento_atendimento','pa.pia_id','pa.tipo','pa.periodo','pa.data_inicio','pa.created_at','pa.updated_at','pa.deleted_at');
		$this->column_search = array('pa.id_planejamento_atendimento','pa.pia_id','pa.tipo','pa.periodo','pa.data_inicio','pa.created_at','pa.updated_at','pa.deleted_at');
		$this->order = array('id_planejamento_atendimento');
		$this->dates = array('data_inicio', 'created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'adolescente a', 'juncao' => 'a.id_adolescente = pa.adolescente_id', 'tipo' => 'INNER']
		);
	}
}
