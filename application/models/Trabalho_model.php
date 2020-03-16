<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Trabalho_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "cargos";
        $this->column_order = array('id_cargo', 'nome', 'descricao', 'created_at', 'updated_at', 'deleted_at');
        $this->column_search = array('id_cargo', 'nome', 'descricao', 'created_at', 'updated_at', 'deleted_at');
        $this->order = array('id_cargo');
        $this->dates = array('created_at', 'updated_at', 'deleted_at');
    }
}
