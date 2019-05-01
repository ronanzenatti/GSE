<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ComposicaoFamiliar1_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "composicao_familiar";
		$this->column_order = array('idcf', 'recebe_beneficio', 'beneficios', 'obs', 'idendereco', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('idcf', 'recebe_beneficio', 'beneficios', 'obs', 'idendereco', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('idcf');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->pk_name = 'idcf';
	}
}
