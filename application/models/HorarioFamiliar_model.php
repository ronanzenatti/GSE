<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class HorarioFamiliar_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "horarios_familiar hf";
		$this->pk_name = 'hf.id_horario_familia';
		$this->column_order = array('hf.id_horario_familia','hf.adolescente_id','hf.chega_tarde','hf.compromissos','hf.periodo_rua','hf.created_at','hf.updated_at','hf.deleted_at');
		$this->column_search = array('hf.id_horario_familia','hf.adolescente_id','hf.chega_tarde','hf.compromissos','hf.periodo_rua','hf.created_at','hf.updated_at','hf.deleted_at');
		$this->order = array('id_horario_familia');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'adolescente a', 'juncao' => 'a.id_adolescente = hf.adolescente_id', 'tipo' => 'INNER']
		);
	}
}
