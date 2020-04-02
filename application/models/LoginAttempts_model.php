<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LoginAttempts_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "login_attempts";
		$this->pk_name = 'id';
		$this->column_order = array('id', 'ip_address', 'login', 'time');
		$this->column_search = array('id', 'ip_address', 'login', 'time');
		$this->order = array('id');
	}
}
