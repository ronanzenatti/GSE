<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PlanejamentoFuturo_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "planejamentos_futuros";
		$this->pk_name = 'id_planejamento_futuro';
		$this->column_order = array('id_planejamento_futuro', 'adolescente_id', 'futuro', 'interesse_familia', 'influencia_negativa', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_planejamento_futuro', 'adolescente_id', 'futuro', 'interesse_familia', 'influencia_negativa', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_planejamento_futuro');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
	}
}

