<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Educacao extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$_SESSION['extends_module'] = 'modulo_educacao/template';
		// template vermelho
		redirect('principal/');
	}


}
