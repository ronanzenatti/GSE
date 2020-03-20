<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SituacaoHabitacional extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('SituacaoHabitacional_model', 'shm');
        $this->load->model('Adolescente_model', 'am');
        $this->load->model("Endereco_model", "edm");
        $this->load->model('Documento_model', 'dm');
    }

    public function index()
    {
        $this->blade->view('adolescentes/listar');
    }

    public function endereco($id)
    {
        $dados = array();
        $dados['end'] = $this->edm->GetById('id_endereco', $id);
        $dados['ado'] = $this->am->GetById('id_adolescente', $dados['end']['adolescente_id']);
        $dados['doc'] = $this->dm->GetById('adolescente_id', $dados['end']['adolescente_id']);
        $dados['sh'] = $this->shm->GetById('endereco_id', $dados['end']['id_endereco']);

        $this->blade->view('situacao_habitacional/iuSH', $dados);
    }

    public function save()
    {
        $obj = Array();

        $id = $this->input->post('id_sh');
        $obj['endereco_id'] = $this->input->post('id_endereco');
        $obj['agua'] = !empty($this->input->post('agua')) ? 1 : 0;
        $obj['esgoto'] = $this->input->post('esgoto') ? 1 : 0;
        $obj['energia'] = $this->input->post('energia') ? 1 : 0;
        $obj['pavimento'] = !empty($this->input->post('pavimento')) ? 1 : 0;
        $obj['coleta_lixo'] = $this->input->post('coleta_lixo') ? 1 : 0;
        $obj['tipo'] = $this->input->post('tipo');
        $obj['situacao'] = $this->input->post('situacao');
        $obj['valor'] = str_replace(',', '.', str_replace('.', '', $this->input->post('valor')));
        $obj['qtde_comodos'] = $this->input->post('qtde_comodos');
        $obj['qtde_pessoas'] = $this->input->post('qtde_pessoas');
        $obj['espaco'] = str_replace(',', '.', str_replace('.', '', $this->input->post('espaco')));
        $obj['obs'] = $this->input->post('obs');

        if (empty($id)) {
            $obj['created_at'] = date('Y-m-d H:i:s');
            $obj['updated_at'] = date('Y-m-d H:i:s');
            $this->shm->Insert($obj);
        } else {
            $obj['updated_at'] = date('Y-m-d H:i:s');
            $this->shm->Update($id, $obj);
        }
        redirect('Adolescente/');
    }
}
