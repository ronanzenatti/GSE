<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Trabalho_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "trabalhos t";
        $this->pk_name = 't.id_trabalho';
        $this->column_order = array('t.id_trabalho','t.adolescente_id','t.empresa','t.salario','t.dt_inicio','t.horario_inicio','t.horario_fim','t.dt_recisao','t.obs','t.motivo_recisao','t.tipo','t.created_at','t.updated_at','t.deleted_at');
        $this->column_search = array('t.id_trabalho','t.adolescente_id','t.empresa','t.salario','t.dt_inicio','t.horario_inicio','t.horario_fim','t.dt_recisao','t.obs','t.motivo_recisao','t.tipo','t.created_at','t.updated_at','t.deleted_at');
        $this->order = array('id_trabalho');
        $this->dates = array('dt_inicio', 'horario_inicio', 'horario_fim', 'dt_recisao', 'created_at', 'updated_at', 'deleted_at');
        $this->joins = array(
			['tabela' => 'adolescente a', 'juncao' => 'a.id_adolescente = t.adolescente_id', 'tipo' => 'INNER']
		);
    }
}
