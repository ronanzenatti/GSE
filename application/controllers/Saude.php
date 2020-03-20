<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saude extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$_SESSION['extends_module'] = 'modulo_saude/template';
		// template azul
		redirect('principal/');
	}


}
