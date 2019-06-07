<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class HistoricoLogins_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "historico_logins";
		$this->pk_name = 'idhl';
		$this->column_order = array('created_at, ip_address, navegador, so');
		$this->column_search = array('created_at', 'ip_address', 'navegador', 'so');
		$this->order = array('created_at');
		$this->dates = array('created_at', 'deleted_at');
		$this->select = "DATE_FORMAT(created_at, '%d/%m/%Y %T') AS created_at, ip_address, navegador, so, idhl";
		$this->exclude = true;
	}
}
