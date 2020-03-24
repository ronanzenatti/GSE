<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LazerCulturaEsporte_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "lazeres_culturas_esportes";
		$this->pk_name = 'id_lce';
		$this->column_order = array('id_lce', 'adolescente_id', 'cultural_participa', 'cultural_interesse', 'esportiva_participa', 'esportiva_interesse', 'lazer', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_lce', 'adolescente_id', 'cultural_participa', 'cultural_interesse', 'esportiva_participa', 'esportiva_interesse', 'lazer', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('id_lce');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
	}
}