<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documento extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Documento_model', 'dm');
	}

	public function index()
	{
		$this->blade->view('/listar');
	}
}
