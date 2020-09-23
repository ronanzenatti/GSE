<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Install extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Entidade_model', 'em');
		$this->load->model('Cargo_model', 'cm');
		$this->load->model('Funcionario_model', 'fm');
		$this->load->model('Usuario_model', 'um');
		$this->load->model('Ion_auth_model', 'iam');
		$this->load->model('TermoCompromisso_model', 'tcm');
		$this->fm->table = "funcionarios";
		$this->um->table = "usuarios";
	}

	public function index()
	{

		$adm = $this->um->GetById('email', 'ronan.zenatti@etec.sp.gov.br');

		$this->session->sess_destroy();

		if (!$adm) {

			$this->session->set_userdata('user_id', '1');

			$entidade = array(
				'nome' => 'ETEC de Ibitinga',
				'cnpj' => '62.823.257/0161-02',
				'tipo' => 'R',
				'logradouro' => 'Rua Rosalbino Tucci',
				'numero' => '431',
				'bairro' => 'Centro',
				'cidade' => 'Ibitinga',
				'estado' => 'SP',
				'cep' => '14.940-000',
				'telefones' => '(16) 3341-7046 / 3342-6039',
				'email' => 'e161dir@cps.sp.gov.br',
				'responsavel' => 'Diretora',
				'resp_tel' => '(16) 3341-7046',
				'resp_email' => 'e161dir@cps.sp.gov.br',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
			);
			$idE = $this->em->Insert($entidade);

			$cargo = array(
				'nome' => 'Administrador',
				'descricao' => 'Administrador do Sistema',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
			);
			$idC = $this->cm->Insert($cargo);

			$funcionario = array(
				'nome' => 'Ronan Adriel Zenatti',
				'dt_nasc' => '1988-02-25',
				'sexo' => 'M',
				'cpf' => '355.936.478-79',
				'rg' => '41.324.990-6',
				'registro' => '57852',
				'logradouro' => 'Rua dos Lavradores',
				'numero' => '302',
				'bairro' => 'Centro',
				'cidade' => 'Boracéia',
				'estado' => 'SP',
				'cep' => '17.270-000',
				'telefones' => '(14) 9 8157-5657',
				'obs' => 'Cadastro Automático.',
				'entidade_id' => $idE,
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
			);
			$idF = $this->fm->Insert($funcionario);

			$termo = array(
				'nome' => 'Termo do Administrador',
				'texto' => 'Termo para o Administrador do Sistema',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
			);
			$idTC = $this->tcm->Insert($termo);

			$usr['ip_address'] = $this->input->ip_address();

			$usr['cargo_id'] = $idC;
			$usr['termo_id'] = $idTC;
			$usr['email'] = 'ronan.zenatti@etec.sp.gov.br';
			$usr['password'] = $this->iam->hash_password('P#ssw0rdr');
			$usr['active'] = 1;
			$usr['funcionario_id'] = $idF;
			$usr['data_termo'] = date('Y-m-d H:i:s');
			$usr['created_at'] = date('Y-m-d H:i:s');
			$usr['updated_at'] = date('Y-m-d H:i:s');
			$this->um->Insert($usr);
			return redirect("/");
		}

	}

	function renew()
	{
		$dis = $this->db->query("SET FOREIGN_KEY_CHECKS=0;");

		$query = $this->db->query("SHOW TABLES");
		$name = $this->db->database;
		foreach ($query->result_array() as $row) {
			$table = $row['Tables_in_' . $name];
			$this->db->query("TRUNCATE " . $table);
			$this->db->query("ALTER TABLE " . $table . " AUTO_INCREMENT = 1");
		}

		$this->session->sess_destroy();

		$dis = $this->db->query("SET FOREIGN_KEY_CHECKS=1;");
		redirect('/');
	}

}

