<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabalho extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Trabalho_model', 'm');
	}

	public function index()
	{
		$this->blade->view('trabalhos/listar');
	}
}
