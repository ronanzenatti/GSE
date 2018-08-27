<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adolescente extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Adolescente_model', 'am');
	}

	public function index()
	{
		$this->blade->view('adolescentes/listar');
	}
}
