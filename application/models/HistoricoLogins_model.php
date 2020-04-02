<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class HistoricoLogins_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "historico_logins hl";
		$this->pk_name = 'hl.id_hl';
		$this->column_order = array('hl.created_at', 'hl.ip_address', 'hl.navegador', 'hl.so');
		$this->column_search = array('hl.created_at', 'hl.ip_address', 'hl.navegador', 'hl.so');
		$this->order = array('created_at');
		$this->dates = array('created_at', 'deleted_at');
		$this->select = "DATE_FORMAT(created_at, '%d/%m/%Y %T') AS created, ip_address, navegador, so, id_hl";
		$this->exclude = true;
		$this->joins = array(
			['tabela' => 'usuario u', 'juncao' => 'u.usuario_id = hl.usuario_id', 'tipo' => 'INNER']
		);
	}
}
