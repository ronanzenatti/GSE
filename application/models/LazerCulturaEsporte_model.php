<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LazerCulturaEsporte_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "lazeres_culturas_esportes";
		$this->pk_name = 'ld_lce';
		$this->column_order = array('lce.ld_lce','lce.adolescente_id','lce.cultural_participa','lce.cultural_interesse','lce.esportiva_participa','lce.esportiva_interesse','lce.lazer','lce.created_at','lce.updated_at','lce.deleted_at');
		// $this->column_search = array('lce.ld_lce','lce.adolescente_id','lce.cultural_participa','lce.cultural_interesse','lce.esportiva_participa','lce.esportiva_interesse','lce.lazer','lce.created_at','lce.updated_at','lce.deleted_at');
		$this->order = array('ld_lce');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'adolescente a', 'juncao' => 'a.id_adolescente = lce.adolescente_id', 'tipo' => 'INNER']
		);
	}
}