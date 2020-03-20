<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Funcionario_model', 'fm');
        $this->load->model('Usuario_model', 'um');
        $this->load->model('Cargo_model', 'cm');
        $this->load->model('Entidade_model', 'em');
        $this->load->model('Ion_auth_model', 'iam');
    }

    public function index()
    {
        $this->blade->view('funcionarios/listar');
    }


    public function inserir()
    {
        $this->blade->view('funcionarios/iuFuncionario');
    }

    public function save()
    {
        $this->fm->table = "funcionarios";
        $this->um->table = "usuarios";

        $obj = Array();
        $usr = Array();
        $id = $this->input->post('id_');

        $obj['nome'] = mb_strtoupper($this->input->post('nome'), 'UTF-8');
        $obj['dt_nasc'] = $this->input->post('dt_nasc');
        $obj['dt_nasc'] = (!empty($obj['dt_nasc'])) ? date('Y-m-d', strtotime(str_replace("/", "-", $obj['dt_nasc']))) : null;
        $obj['sexo'] = $this->input->post('sexo');
        $obj['logradouro'] = $this->input->post('logradouro');
        $obj['numero'] = $this->input->post('numero');
        $obj['bairro'] = $this->input->post('bairro');
        $obj['cidade'] = $this->input->post('cidade');
        $obj['estado'] = $this->input->post('estado');
        $obj['cep'] = $this->input->post('cep');
        $obj['telefones'] = $this->input->post('telefones');
        $obj['obs'] = $this->input->post('obs');
        $obj['entidade_id'] = $this->input->post('id_entidade');

        $usr['ip_address'] = $this->input->ip_address();

        $usr['cargo_id'] = $this->input->post('id_cargo');
        $usr['email'] = $this->input->post('email');
        $usr['password'] = (!empty($this->input->post('senha'))) ? $this->iam->hash_password($this->input->post('senha')) : null;
        $usr['active'] = 1;
        $usr['termo'] = 0;

        if (empty($id)) {
            $obj['created_at'] = date('Y-m-d H:i:s');
            $obj['updated_at'] = date('Y-m-d H:i:s');

            $usr['created_at'] = date('Y-m-d H:i:s');
            $usr['updated_at'] = date('Y-m-d H:i:s');

            $id = $this->fm->Insert($obj);

            $usr['funcionario_id'] = $id;
            $this->um->Insert($usr);
        } else {
            $obj['updated_at'] = date('Y-m-d H:i:s');
            $usr['updated_at'] = date('Y-m-d H:i:s');
            $this->fm->table = "funcionarios";
            $this->fm->Update($id, $obj);

            if (empty($usr['password']))
                unset($usr['password']);

            $idU = $this->input->post('id_usuario');

            $this->um->Update($idU, $usr);
        }

        redirect('funcionario/');
    }

    public function alterar($id)
    {
//        $this->fm->table = "funcionarios";
//        $this->um->table = "usuarios";
        $dados = Array();
        $dados['obj'] = $this->fm->GetById('id_funcionario', $id);
        $dados['obj']['dt_nasc'] = (!empty($dados['obj']['dt_nasc'])) ? date("d/m/Y", strtotime($dados['obj']['dt_nasc'])) : null;
        $dados['objU'] = $this->um->GetByFuncionario($id);
        $dados['objC'] = $this->cm->GetById('id_cargo', $dados['objU']['cargo_id']);
        $dados['objE'] = $this->em->GetById('id_entidade', $dados['obj']['entidade_id']);
        $this->blade->view('funcionarios/iuFuncionario', $dados);
    }

    public function deletar()
    {
        $this->fm->table = "funcionarios";
        $id = $this->input->post('id');
        $this->fm->DeleteLogico($id);
        $obj = $this->um->GetByFuncionario($id);
        $dados['active'] = 0;
        $dados['deletec_at'] = date('Y-m-d H:i:s');
        $this->um->Update('id_usuario', $obj['id_usuario'], $dados);
    }


    public function Ajax_Datatables()
    {

        $list = $this->fm->Get_Datatables('f');
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $obj) {
            $no++;
            $row = array();
            //    $row[] = $no;
            $row[] = $obj->id_funcionario;
            $row[] = $obj->nome;
            $row[] = $obj->entidade;
            $row[] = $obj->telefones;

            $btns = "<a href='" . base_url('funcionario/alterar/' . $obj->id_funcionario) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
            $btns .= "<button type='button' onclick='deletarRegistro(\"funcionario\", " . $obj->id_funcionario . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
            $row[] = $btns;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->fm->count_all('f'),
            "recordsFiltered" => $this->fm->count_filtered('f'),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
}
