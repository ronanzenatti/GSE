<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Endereco extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Endereco_model', 'em');
	}

	public function index()
	{
		$this->blade->view('enderecos/listar');
	}
}
