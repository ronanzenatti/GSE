<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		$this->fm->table = "funcionarios";
		$this->um->table = "usuarios";
	}

	public function index()
	{
		$adm = $this->um->GetById('email', 'ronan.zenatti@etec.sp.gov.br');

		if (!$adm) {

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
				'responsavel' => 'Patricia',
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
				'cpf' => '355,936,478-79',
				'rg' => '41,324,990-6',
				'registro' => '57852',
				'logradouro' => 'Rua dos Lavradores',
				'numero' => '302',
				'bairro' => 'Centro',
				'cidade' => 'Boracéia',
				'estado' => 'SP',
				'cep' => '17.270-000',
				'telefones' => '(14) 9 8157-5657',
				'obs' => 'Cadastro Automático.',
				'identidade' => $idE,
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
			);
			$idF = $this->fm->Insert($funcionario);

			$usr['ip_address'] = $this->input->ip_address();

			$usr['idcargo'] = $idC;
			$usr['email'] = 'ronan.zenatti@etec.sp.gov.br';
			$usr['password'] = $this->iam->hash_password('P#ssw0rdr');
			$usr['active'] = 1;
			$usr['termo'] = 1;
			$usr['idfuncionario'] = $idF;
			$usr['created_at'] = date('Y-m-d H:i:s');
			$usr['updated_at'] = date('Y-m-d H:i:s');
			$this->um->Insert($usr);
			return redirect("/");
		}

	}

	public function renew()
	{

		$sql = "SET FOREIGN_KEY_CHECKS = 0; ";
		$sql .= "
				TRUNCATE adolescentes;
				TRUNCATE cargos;
				TRUNCATE composicao_familiar;
				TRUNCATE contatos;
				TRUNCATE documentos;
				TRUNCATE enderecos;
				TRUNCATE entidades;
				TRUNCATE funcionarios;
				TRUNCATE login_attempts;
				TRUNCATE pessoa_familia;
				TRUNCATE situacao_habitacional;
				TRUNCATE trabalhos;
				TRUNCATE usuarios;";
		$sql .= "SET FOREIGN_KEY_CHECKS = 1; ";
		if ($this->db->simple_query($sql)) {
			echo "<h1>Banco Limpo com Sucesso!!!</h1>";
			//redirect("/install");
		} else {
			echo "<h1>Erro!!!</h1>";
			print_r($error = $this->db->error()); // Has keys 'code' and 'message'
		}
	}

}

