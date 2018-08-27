<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SituacaoHabitacional extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('SituacaoHabitacional_model', 'shm');
	}

	public function index()
	{
		$this->blade->view('situacao_habitacional/listar');
	}
}
