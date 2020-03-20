<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outros extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$_SESSION['extends_module'] = 'modulo_outros/template';
		// template amarelo
		redirect('principal/');
	}


}
