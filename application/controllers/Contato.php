<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Contato_model', 'cm');
	}

	public function index()
	{
		$this->blade->view('contatos/listar');
	}
}
