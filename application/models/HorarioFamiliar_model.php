<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class HorarioFamiliar_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "horarios_familiar";
		$this->pk_name = 'id_horario_familia';
		$this->column_order = array('id_horario_familia', 'adolescente_id', 'chega_tarde', 'compromissos', 'periodo_rua', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_horario_familia', 'adolescente_id', 'chega_tarde', 'compromissos', 'periodo_rua', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_horario_familia');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
	}
}
