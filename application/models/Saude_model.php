<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Saude_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "saude";
		$this->pk_name = 'id_saude';
		$this->column_order = array('id_saude', 'adolescente_id', 'problemas_saude', 'tratamentos', 'psicologico_psiquiatrico', 'cigarro_inicio', 'cigarros_frequencia', 'cigarros_quantidade', 'bebidas_inicio', 'bebidas_frequencia', 'bebidas_quantidade', 'drogas', 'drogas_inicio', 'drogas_frequencia', 'drogas_quantidade', 'medicamentos', 'doenca_familia', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_saude', 'adolescente_id', 'problemas_saude', 'tratamentos', 'psicologico_psiquiatrico', 'cigarro_inicio', 'cigarros_frequencia', 'cigarros_quantidade', 'bebidas_inicio', 'bebidas_frequencia', 'bebidas_quantidade', 'drogas', 'drogas_inicio', 'drogas_frequencia', 'drogas_quantidade', 'medicamentos', 'doenca_familia', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_saude');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
	}
}
