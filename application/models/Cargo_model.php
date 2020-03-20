<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cargo_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->table = "cargos";
        $this->column_order = array('id_cargo', 'nome', 'descricao');
        $this->column_search = array('id_cargo', 'nome', 'descricao');
        $this->order = array('id_cargo');
        $this->dates = array('created_at', 'updated_at', 'deleted_at');
        $this->pk_name = 'id_cargo';
    }
}
