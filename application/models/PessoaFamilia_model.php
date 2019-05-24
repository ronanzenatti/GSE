<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PessoaFamilia_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "pessoa_familia";
        $this->column_order = array('idpf', 'idcf', 'nome', 'parentesco', 'dt_nasc', 'sexo', 'escolaridade', 'formacao_profissional', 'ocupacao', 'renda', 'telefones', 'obs', 'created_at', 'updated_at', 'deleted_at');
        $this->column_search = array('idpf', 'idcf', 'nome', 'parentesco', 'dt_nasc', 'sexo', 'escolaridade', 'formacao_profissional', 'ocupacao', 'renda', 'telefones', 'obs', 'created_at', 'updated_at', 'deleted_at');
        $this->select = array('idpf', 'idcf', 'nome', 'parentesco', 'TIMESTAMPDIFF(YEAR,dt_nasc,CURDATE()) AS dt_nasc', 'sexo', 'escolaridade', 'formacao_profissional', 'ocupacao', 'renda', 'telefones', 'obs', 'created_at', 'updated_at', 'deleted_at');
        $this->order = array('idsh');
        $this->dates = array('created_at', 'updated_at', 'deleted_at');
    }
}
