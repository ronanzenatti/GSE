<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PlanejamentoFuturo_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "planejamentos_futuros pf";
		$this->pk_name = 'pf.id_planejamento_futuro';
		$this->column_order = array('pf.id_planejamento_futuro','pf.adolescente_id','pf.futuro','pf.interesse_familia','pf.influencia_negativa','pf.created_at','pf.updated_at','pf.deleted_at');
		$this->column_search = array('pf.id_planejamento_futuro','pf.adolescente_id','pf.futuro','pf.interesse_familia','pf.influencia_negativa','pf.created_at','pf.updated_at','pf.deleted_at');
		$this->order = array('id_planejamento_futuro');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'adolescente a', 'juncao' => 'a.id_adolescente = pf.adolescente_id', 'tipo' => 'INNER']
		);
	}
}

