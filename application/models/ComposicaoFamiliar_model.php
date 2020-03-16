<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ComposicaoFamiliar_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "composicao_familiar";
		$this->column_order = array('id_cf', 'endereco_id', 'nome', 'parentesco', 'dt_nasc', 'sexo', 'escolaridade', 'formacao_profissional', 'ocupacao', 'renda', 'telefones', 'obs', 'created_at', 'updated_at', 'deleted_at');
		$this->column_search = array('id_cf', 'endereco_id', 'nome', 'parentesco', 'dt_nasc', 'sexo', 'escolaridade', 'formacao_profissional', 'ocupacao', 'renda', 'telefones', 'obs', 'created_at', 'updated_at', 'deleted_at');
		$this->select = array('id_cf', 'endereco_id', 'nome', 'parentesco', 'TIMESTAMPDIFF(YEAR, dt_nasc, CURDATE()) AS dt_nasc', 'sexo', 'escolaridade', 'formacao_profissional', 'ocupacao', 'renda', 'telefones', 'obs', 'created_at', 'updated_at', 'deleted_at');
		$this->order = array('endereco_id');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->pk_name = 'id_cf';
	}
}
