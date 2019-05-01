<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Audit_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "audit";
		$this->column_order = array('tipo', 'created_at', 'user_id', 'model', 'model_id', 'antes', 'depois');
		$this->column_search = array('tipo', 'created_at', 'user_id', 'model', 'model_id', 'antes', 'depois');
		$this->order = array('id');
		$this->dates = array('created_at');
		$this->chars = array('tipo');
	}
}
