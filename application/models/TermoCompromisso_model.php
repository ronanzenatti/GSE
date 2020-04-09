<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TermoCompromisso_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
	
		$this->table = "termos_compromissos";
		$this->column_order = array("id_termo", "nome", "texto");
		$this->column_search = array("id_termo", "nome", "texto");
		$this->order = array('id_termo');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->pk_name = 'id_termo';
	}
}
