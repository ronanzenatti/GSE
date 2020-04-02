<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Saude_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "saude s";
		$this->pk_name ='s.id_saude';
		$this->column_order = array('s.id_saude','s.adolescente_id','s.problemas_saude','s.tratamentos','s.psicologico_psiquiatrico','s.cigarro_inicio','s.cigarros_frequencia','s.cigarros_quantidade','s.bebidas_inicio','s.bebidas_frequencia','s.bebidas_quantidade','s.drogas','s.drogas_inicio','s.drogas_frequencia','s.drogas_quantidade','s.medicamentos','s.doenca_familia','s.created_at','s.updated_at','s.deleted_at');
		$this->column_search = array('s.id_saude','s.adolescente_id','s.problemas_saude','s.tratamentos','s.psicologico_psiquiatrico','s.cigarro_inicio','s.cigarros_frequencia','s.cigarros_quantidade','s.bebidas_inicio','s.bebidas_frequencia','s.bebidas_quantidade','s.drogas','s.drogas_inicio','s.drogas_frequencia','s.drogas_quantidade','s.medicamentos','s.doenca_familia','s.created_at','s.updated_at','s.deleted_at');
		$this->order = array('id_saude');
		$this->dates = array('created_at', 'updated_at', 'deleted_at');
		$this->joins = array(
			['tabela' => 'adolescente a', 'juncao' => 'a.id_adolescente = s.adolescente_id', 'tipo' => 'INNER']
		);
	}
}
