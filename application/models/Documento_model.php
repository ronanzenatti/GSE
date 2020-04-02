<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Documento_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = "documentos";
		$this->column_order = array('id_documento, adolescente_id, cert_nasc, cert_livro, cert_folhas, cert_cartorio, bairro_cartorio, municipio_cartorio, cpf, rg, rg_emissao, ctps, ctps_serie, pis, titulo_eleitor, te_secao, te_zona, cam, cdi_cr, cartao_sus, created_at, updated_at, deleted_at');
		$this->column_search = array('id_documento, adolescente_id, cert_nasc, cert_livro, cert_folhas, cert_cartorio, bairro_cartorio, municipio_cartorio, cpf, rg, rg_emissao, ctps, ctps_serie, pis, titulo_eleitor, te_secao, te_zona, cam, cdi_cr, cartao_sus, created_at, updated_at, deleted_at');
		$this->order = array('id_documento');
		$this->dates = array('rg_emissao', 'created_at', 'updated_at', 'deleted_at');
		$this->pk_name = 'id_documento';
	}
}


