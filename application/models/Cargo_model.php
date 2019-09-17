<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cargo_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->table = "cargos";
        $this->column_order = array('idcargo', 'nome', 'descricao', 'created_at', 'updated_at', 'deleted_at');
        $this->column_search = array('idcargo', 'nome', 'descricao', 'created_at', 'updated_at', 'deleted_at');
        $this->order = array('idcargo');
        $this->dates = array('created_at', 'updated_at', 'deleted_at');
        $this->pk_name = 'idcargo';
    }
}
