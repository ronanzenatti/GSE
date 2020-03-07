<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		if ($this->ion_auth->logged_in()) {
			
			$entidadeId = $_SESSION["entidade_id"];
			$query = $this->db->query("SELECT * FROM entidades WHERE identidade='$entidadeId'");
			
			foreach ($query->result() as $coluna)
			{
				$tipoModulo = $coluna->tipo;
				$_SESSION['tipoModulo'] = $tipoModulo;
			}

			switch ($tipoModulo) {
				case "C":
					$this->blade->view("modulo_creas/template");
					$_SESSION['extends_module'] = 'modulo_creas/template';
					// template verde
					break;
				case "M":
					$this->blade->view("modulo_mp/template");
					$_SESSION['extends_module'] = 'modulo_mp/template';
					// template roxo
					break;
				case "S":
					$this->blade->view("modulo_saude/template");
					$_SESSION['extends_module'] = 'modulo_saude/template';
					// template azul
					break;
				case "E":
					$this->blade->view("modulo_educacao/template");
					$_SESSION['extends_module'] = 'modulo_educacao/template';
					// template vermelho
					break;
				case "A":
					$this->blade->view("modulo_assistencial/template");
					$_SESSION['extends_module'] = 'modulo_assistencial/template';
					// template branco
					break;
				case "O":
					$this->blade->view("modulo_outros/template");
					$_SESSION['extends_module'] = 'modulo_outros/template';
					// template amarelo
					break;
				default:
					$this->blade->view("template");
					$_SESSION['extends_module'] = 'template';
					// template padrao (azul)
					break;
			}

			// if ($tipoModulo == "C")
			// 	$this->blade->view("modulo_creas/template");
			// elseif ($tipoModulo == "M")
			// 	$this->blade->view("modulo_mp/template");
			// elseif ($tipoModulo == "S")
			// 	$this->blade->view("modulo_saude/template");
			// elseif ($tipoModulo == "E")
			// 	$this->blade->view("modulo_educacao/template");
			// elseif ($tipoModulo == "A")
			// 	$this->blade->view("modulo_assistencial/template");
			// elseif ($tipoModulo == "O")
			// 	$this->blade->view("modulo_outros/template");
			// else
			// 	$this->blade->view("template");
		}
	}
}
