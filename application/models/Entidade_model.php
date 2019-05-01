<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Entidade_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "entidades";
        $this->column_order = array('identidade', 'nome', 'cnpj', 'tipo', 'logradouro', 'numero', 'bairro', 'cidade', 'estado', 'cep', 'telefones', 'email', 'responsavel', 'resp_tel', 'resp_email', 'created_at', 'updated_at', 'deleted_at');
        $this->column_search = array('identidade', 'nome', 'cnpj', 'tipo', 'logradouro', 'numero', 'bairro', 'cidade', 'estado', 'cep', 'telefones', 'email', 'responsavel', 'resp_tel', 'resp_email', 'created_at', 'updated_at', 'deleted_at');
        $this->order = array('identidade');
        $this->dates = array('created_at', 'updated_at', 'deleted_at');
        $this->chars = array('tipo');
        $this->pk_name = 'identidade';
    }
}
