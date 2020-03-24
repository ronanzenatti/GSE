<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Trabalho_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "trabalhos";
        $this->pk_name = 'id_trabalho';
        $this->column_order = array('id_trabalho', 'adolescente_id', 'empresa', 'salario', 'dt_inicio', 'horario_inicio', 'horario_fim', 'dt_recisao', 'obs', 'motivo_recisao', 'tipo', 'created_at', 'updated_at', 'deleted_at');
        $this->column_search = array('id_trabalho', 'adolescente_id', 'empresa', 'salario', 'dt_inicio', 'horario_inicio', 'horario_fim', 'dt_recisao', 'obs', 'motivo_recisao', 'tipo', 'created_at', 'updated_at', 'deleted_at');
        $this->order = array('id_trabalho');
        $this->dates = array('dt_inicio', 'horario_inicio', 'horario_fim', 'dt_recisao', 'created_at', 'updated_at', 'deleted_at');
        
    }
}
